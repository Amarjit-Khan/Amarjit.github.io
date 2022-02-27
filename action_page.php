<?php
$name = $_GET['Name'];
$email = $_GET['Email'];
$subject = $_GET['Subject'];
$message = $_GET['Message'];

$to = "btheory994@gmail.com";


$txt = "Name :: " . $name . "\r\n Email :: " . $email . "\r\n Subject :: " . $subject . "\r\n Message :: " . $message;
$headers = "From: btheory994@gmail.com";

// mail($to, $subject, $txt, $headers);

// header("Location:index.html");
echo($txt);
?>
