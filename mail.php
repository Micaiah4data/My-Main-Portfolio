<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "micaiahobinwa14@gmail.com"
$subject = "Mail from my Portfolio Website"

$headers = "From: ".$name. "\r\n" .
"CC: micaiahobinwa14@gmail.com"; 


$txt = "You have recieved a message from".$name ."\r\nEmail: " .$email .$email."\r\n Message: ". $message;


if ($email!=NULL){
    mail($to, $subject, $txt, $headers);
}

?>