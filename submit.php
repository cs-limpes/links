<?php
  // Check if the form has been submitted
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate the form data
    if (empty($name) || empty($email) || empty($message)) {
      die('Please fill in all fields.');
    }

    // Send an email to the website owner
    $to = 'hello@charleneslimp.com';
    $subject = 'CS Links Submission';
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
      echo 'Thank you for contacting us.';
    } else {
      echo 'There was a problem sending your message. Please try again.';
    }
  }
