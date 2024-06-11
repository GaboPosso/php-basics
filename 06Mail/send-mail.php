<?php
$from = $_POST["from_txt"];
$for = $_POST["for_txt"];
$subject = $_POST["subject_txt"];
$message = $_POST["message_txa"];
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: $from\r\n";

if(mail($for, $subject, $message, $headers)){
  $response = "Message has been sent.";
} else {
  $response = "An error has occurred. Data has not been sent.";
}
 header("Location: form-mail.php?response=$response");