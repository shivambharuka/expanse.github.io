<?php
$email = $_POST['email'];

$to = 'shivam@getexpanse.com';
$subject = 'Expanse Form Submission';
$body = "Email: $email";

if (mail($to, $subject, $body)) {
  echo 'Thank you for your submission!';
} else {
  echo 'An error occurred. Please try again.';
}
?>