<?php

    // Get form data
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


   $mail->Host       = 'smtp.gmail.com';                     // Specify main and
   $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
   $mail->port =   587;

   $mail->username =  "your-email@gmail.com"; 
   $mail->password =  "password";

   $mail->setFrom($email, $name);
   $mail->addAddress("adeoyemeshack37@gmail.com", "Adeoye Meshack"); 

   $mail->Subject =$subject;
   $mail->Body = $message;

   $mail->send();
   echo "email sent";
?>
