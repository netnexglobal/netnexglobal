<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Get form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $job = $_POST["job"];

  // Set email headers
  $to = "netnexgroup@gmail.com"; // Replace with your email address
  $subject = "New form submission from $name";
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $name <$email>\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=utf-8\r\n";

  // Compose email message
  $message = "<p><strong>Name:</strong> $name</p>";
  $message .= "<p><strong>Email:</strong> $email</p>";
  $message .= "<p><strong>Phone Number:</strong> $phone</p>";
  $message .= "<p><strong>Job Role:</strong> $job</p>";

  // Send email
  if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
  } else {
    echo "Email could not be sent.";
  }

}
?>
