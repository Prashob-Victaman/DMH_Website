<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"];
  $email = $_POST["Email"];
  $phone = $_POST["mobile"];
  $message = $_POST["Massage"];

  // Set the recipient email address
//   $to = "ask2designmyhouse@gmail.com";
  $to = "avibhardwaj1410@gmail.com";

  // Set the email subject
  $subject = "New Form Submission";

  // Set the email body
  $body = "Name: " . $name . "\n";
  $body .= "Email: " . $email . "\n";
  $body .= "Phone: " . $phone . "\n";
  $body .= "Message: " . $message . "\n";

  // Set the email headers
  $headers = "From: " . $email . "\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";

  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    echo "success";
  } else {
    echo "error";
  }
}
?>
