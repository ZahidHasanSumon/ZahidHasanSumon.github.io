<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to_email = "zahidhasansumon10@gmail.com"; // Replace with your email
  $from_name = $_POST["name"];
  $from_email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["comment"]; // Change to "comment" as per your form
  
  $headers = "From: $from_name <$from_email> \r\n";
  $headers .= "Reply-To: $from_email \r\n";
  
  // Sending email
  if (mail($to_email, $subject, $message, $headers)) {
    echo "Email sent successfully!";
  } else {
    echo "Failed to send email. Please try again.";
  }
}
?>
