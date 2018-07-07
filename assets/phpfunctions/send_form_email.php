<?php
$successvarmsg = "";
if( !isset($_POST['stripeToken']) ||
    !isset($_POST['stripeEmail']) ||
    !isset($_POST['name']) ||
    !isset($_POST['email']) ||
    !isset($_POST['phone']) ||
    !isset($_POST['message'])
  ) {
  $successvarmsg="missingPOSTvars";
}

include "../../../envConstants.php";
require_once('../../vendor/autoload.php');

\Stripe\Stripe::setApiKey($envConstants["stripe"]['secret_key']);

$token = $_POST['stripeToken'];
$email = $_POST['stripeEmail'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

try {
  $charge = \Stripe\Charge::create([
      'amount' => 100,
      'currency' => 'usd',
      'description' => "Spam is a waste of time. Sincerely, Evan Mays",
      'source' => $token,
      'receipt_email' => $email,
  ]);
  $successvarmsg = "true";
} catch(\Stripe\Error\Card $e) {
  // Since it's a decline, \Stripe\Error\Card will be caught
  $body = $e->getJsonBody();
  $err  = $body['error'];

  //print('Status is:' . $e->getHttpStatus() . "\n");
  //print('Type is:' . $err['type'] . "\n");
  //print('Code is:' . $err['code'] . "\n");
  // param is '' in this case
  //print('Param is:' . $err['param'] . "\n");
  //print('Message is:' . $err['message'] . "\n");
  $successvarmsg = $err['message'];
} catch (\Stripe\Error\RateLimit $e) {
  // Too many requests made to the API too quickly
  $successvarmsg = "myend";
} catch (\Stripe\Error\InvalidRequest $e) {
  // Invalid parameters were supplied to Stripe's API
  $successvarmsg = "myend";
} catch (\Stripe\Error\Authentication $e) {
  // Authentication with Stripe's API failed
  // (maybe you changed API keys recently)
  $successvarmsg = "stripesend";
} catch (\Stripe\Error\ApiConnection $e) {
  // Network communication with Stripe failed
  $successvarmsg = "stripesend";
} catch (\Stripe\Error\Base $e) {
  // Display a very generic error to the user, and maybe send
  // yourself an email
  $successvarmsg = "myend";
} catch (Exception $e) {
  // Something else happened, completely unrelated to Stripe
  $successvarmsg = "myend";
}

function clean_string($string) {
  $bad = array("content-type","bcc:","to:","cc:","href", "<script");
  return str_replace($bad,"",$string);
}

$email_to = "business@evanmays.com";
$email_subject = "Contact form evanmays.com";
$email_message = "Form details below.\n\n";
$email_message .= "Name: ".clean_string($name)."\n";
$email_message .= "Email: ".clean_string($email)."\n";
$email_message .= "Phone: ".clean_string($phone)."\n";
$email_message .= "Message: "."\n".clean_string($message)."\n";

if ($successvarmsg == "true"){

  $email_from = $email;

  // create email headers
  $headers = 'From: '.$email_from."\r\n".
  'Reply-To: '.$email_from."\r\n" .
  'X-Mailer: PHP/' . phpversion();
  @mail($email_to, $email_subject, $email_message, $headers);  
}

header('Location:/contact?success='.urlencode($successvarmsg));
?>