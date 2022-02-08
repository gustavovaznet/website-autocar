<?php
//INPUT POST
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$hour = $_POST['hour'];
$date = $_POST['date'];
$headers = "Content-Type: text/plain;charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

//FORM DATA
$body = "Contact form page\r\n";
$body .= "Name: " . $name . "\r\n";
$body .= "Email: " . $email . "\r\n";
$body .= "Phone: " . $phone . "\r\n";
$body .= "Hour: " . $hour . "\r\n";
$body .= "Date: " . $date . "\r\n";

//DESTINATINED MAIN
$email_to = 'contact@autocar.com';

//SENDING
$status = mail($email_to, mb_encode_mimeheader($subject, "utf-8"), $body, $headers);
if ($status):
  //SUCCESS
  header('location:index.php?status=success');
else:
  //ERROR
  header('location:index.php?status=error');
endif;
?>
