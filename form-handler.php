<?php 

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'markswenso@gmail.com'; //website eamil

$email_subject = 'New Form Submission'; //we can have any message

$email_body = "User Name: $name.\n". // \n to add a new line
				"User Email: $visitor_email.\n".
				"Subject: $subject.\n".
				"User Message: $message .\n";

$to = 'oblairmark@gmail.com'; // email id u want to recieve the message

$headers = "From: $email_form \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");