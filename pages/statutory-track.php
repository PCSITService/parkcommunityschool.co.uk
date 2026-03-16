<?php
use PHPMailer\PHPMailer\PHPMailer;
require '/var/www/html/vendor/autoload.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host       = 'email-smtp.eu-west-2.amazonaws.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'AKIAWFIPS7LSUVZKZONO';
$mail->Password   = 'BCTvPIIGSXa2YDvkMXTvL6mFnuDSclmv4CfRJAr1qt7l';
$mail->SMTPSecure = 'tls';
$mail->Port       = 587;
$mail->setFrom('itservices@parkcommunityschool.co.uk', 'PCS Website');
$mail->addAddress('j.dixon@pcs.hants.sch.uk');
$mail->Subject    = 'Statutory Page Visited';
$mail->Body       = 'Someone has clicked the Statutory link on the Park Community School website.';
$mail->send();

header('Location: /pages/statutory.php', true, 302);
exit;