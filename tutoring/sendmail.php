<?php
// Include PHPMailer library
require 'path_to_phpmailer/PHPMailerAutoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $firstName = $_POST['FirstName'];
  $email = $_POST['Email'];
  $phoneNumber = $_POST['PhoneNumber'];
  $query = $_POST['Query'];

  // Compose email content
  $to = "solidworks.helpingcenter@gmail.com";
  $subject = "Contact Form Submission";
  $message = "First Name: $firstName\n";
  $message .= "Email: $email\n";
  $message .= "Phone Number: $phoneNumber\n";
  $message .= "Query: $query\n";

  // Send the email using PHPMailer
  $mail = new PHPMailer;
  $mail->setFrom('your_email@example.com', 'Your Name'); // Replace with your email and name
  $mail->addAddress($to);
  $mail->Subject = $subject;
  $mail->Body = $message;

  if (!$mail->send()) {
    // If email sending fails
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
    // If email sent successfully
    header("Location: thank_you.html");
    exit;
  }
}
?>
