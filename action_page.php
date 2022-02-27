<?php
$name = $_POST['Name'];
$email = $_POST['Email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];

$to = "btheory994@gmail.com";


$txt = "Name :: " . $name . "\r\n Email :: " . $email . "\r\n Subject :: " . $subject . "\r\n Message :: " . $message;
$headers = "From: btheory994@gmail.com";

mail($to, $subject, $txt, $headers);

header("Location:portfolio.html");
?>