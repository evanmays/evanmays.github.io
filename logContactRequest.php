<?php
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

?>