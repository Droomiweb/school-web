<?php

$name = $_POST['name'];
$visitor = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'arpopsyt@gmail.com';
$email_subject = 'New From User';
$email_body = "User Name : $name.\n".
            "User Email : $visitor.\n".
            "Subject : $subject.\n".
            "User Message : $message.\n";

$to = 'abinkich132@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Replay-To: $visitor \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>