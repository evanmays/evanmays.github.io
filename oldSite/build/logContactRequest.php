<?php
require("../envConstants.php");
function clean_string($string) {
  $bad = array("content-type","bcc:","to:","cc:","href", "<script");
  return str_replace($bad,"",$string);
}

$email_to = "me@evanmays.com";
$email_from = "me@evanmays.com";
$email_subject = "evanmays.com: Contact Request";
$email_message = "Someone is interested in ";
$email_message .= clean_string($_POST['interest']).".\n\n";
$email_message .= "You can contact them at ".clean_string($_POST['email']).".\n\n";
$email_message .= "EOM";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  


//send push notification via Pushover
curl_setopt_array($ch = curl_init(), array(
	CURLOPT_URL => "https://api.pushover.net/1/messages.json",
	CURLOPT_POSTFIELDS => array(
		"token" => $envConstants["pushover"]['token'],
		"user" => $envConstants["pushover"]['user'],
		"message" => $email_message,
	),
	CURLOPT_RETURNTRANSFER => true,
));
curl_exec($ch);
curl_close($ch);
?>