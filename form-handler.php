<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'shahin1044cse@gmail.com';
$email_message = 'New User Submission';
$email_body = "User name: $name.\n".
                "User email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User message: $message.\n";

$to = 'linkonsam76@gmail.com';
$headers = "From: $email_from \r\n";

$headers .="Reply-to: $visitor_email \r\n;
mail($to, $email_message, $email_body, $headers);


header("Location: contact.html");

?>