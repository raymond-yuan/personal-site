<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
// $call = $_POST['call'];
// $website = $_POST['website'];
// $priority = $_POST['priority'];
// $type = $_POST['type'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n Message: $message";
$recipient = "ray.yuan0@gmail.com";
$subject = $_POST['subject'];
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
