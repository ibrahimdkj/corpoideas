<?php
session_cache_limiter( 'nocache' );
$subject = "EMAIL CORPOIDEAS:".$_REQUEST['subject']; // Subject of your email
$to = "contacto@corpoideas.com.co";  //Recipient's E-mail


$message  = 'Email: ' . $_REQUEST['email'] . "<br>";
$message  .= 'Name: ' . $_REQUEST['name'] . "<br>";
$message .= 'Company: ' . $_REQUEST['company'] . "<br>";
$message .= $_REQUEST['message'];

if (@mail($to, $subject, $message))
{
	// Transfer the value 'sent' to ajax function for showing success message.
	echo 'sent';
	// header('Location: ../index.html');
}
else
{
	// Transfer the value 'failed' to ajax function for showing error message.
	echo 'fail';
}
?>