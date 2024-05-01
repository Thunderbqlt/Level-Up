<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
    );

$mail->Username = "pursuingdiscipline@gmail.com";
$mail->Password = "qxth myqj etpx aqei";

$mail->setFrom($email, $name);
$mail->addAddress("s.h.worth@student.saintkentigern.com", "User");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

echo "email sent";  

