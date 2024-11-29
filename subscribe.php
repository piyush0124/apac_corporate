<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $subject = "Subscription Confirmation";
    $message = "Thank you for subscribing to our newsletter!";

    $mail = new PHPMailer(true); // Passing `true` enables exceptions
    try {
          // Server settings
          $mail->isSMTP();
          $mail->Host = 'smtp.gmail.com'; // Your SMTP server
          $mail->SMTPAuth = true;
          $mail->Username = 'piyushchandra860@gmail.com'; // Your email
          $mail->Password = 'opdz axuz lczs kycx'; // Your email password (App Password)
          $mail->SMTPSecure = 'tls';
          $mail->Port = 587;
  
          // Recipients
          $mail->setFrom('chandrapiyush649@gmail.com', 'Piyush Chandra');
          $mail->addAddress($email);

        // Content
        $mail->isHTML(false); // Set email format to plain text
        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();

        // Redirect back to index.php with success flag
        header("Location: index.php?success=true");
        exit();
    } catch (Exception $e) {
        echo 'Email could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}
?>
