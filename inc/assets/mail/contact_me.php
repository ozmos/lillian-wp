<?php
require_once("../../../../../../wp-load.php");
// Check for empty fields
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

// sanitize input
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);


// Create the email and send the message
$to = get_bloginfo('admin_email'); // Add your email address in between the "" replacing yourname@yourdomain.com - This is where the form will send a message to.
$subject = "Someone sent a message from" . get_bloginfo('name');
$body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nPhone: $phone\n\nMessage:\n$message";
$headers = 'From: '. 'enquiries@pcwebsites.com.au' . "\r\n" .
  'Reply-To: ' . $email . "\r\n";

if(!mail($to, $subject, $body, $headers)) {
  http_response_code(500);
}
?>