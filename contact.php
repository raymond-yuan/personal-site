<?php
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$subject = $_POST['subject'];
$field_message = $_POST['message'];

$mail_to = 'ray.yuan0@gmail.com';

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'contact_page.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to ray.yuan0@gmail.com for help.');
		window.location = 'contact_page.html';
	</script>
<?php
}
?>