
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $message = trim($_POST["message"]);

  // Set your email address where you want to receive emails.
  $to = "smacby65@gmail.com";

  // Set email subject and message
  $subject = "Contact Form";
  $message = "Name: $name\nEmail: $email\nMessage: $message";

  // Set email headers
  $headers = "From: $name <$email>\r\nReply-To: $email\r\n";

  // Send the email using PHP's mail() function
  if (mail($to, $subject, $message, $headers)) {
    echo "Thank you for contacting us. We will get back to you shortly.";
  } else {
    echo "Oops! Something went wrong. Please try again later.";
  }
}
?>
