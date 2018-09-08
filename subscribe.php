<?php
$email = $_POST['email'];
$url = $_SERVER['HTTP_REFERER'];
if($email == '')
	header("Location: {$url}");

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$to  = 'pensionwatch2-subscribe@pensiontsunami.com';
$headers .= 'Reply-To: ' . $email . "\r\n";
$headers .= 'From: ' . $email . "\r\n";

	mail($to, 'Subscribe me to Pension Tsunami', 'subscribe pensionwatch2@pensiontsunami.com' . $email, $headers);
	header("Location: {$url}?message=subscribe");

?>