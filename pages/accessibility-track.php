<?php
use PHPMailer\PHPMailer\PHPMailer;

$source = isset($_GET['from']) ? htmlspecialchars($_GET['from']) : 'Unknown';

if (file_exists('/var/www/html/vendor/autoload.php')) {
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
    $mail->addAddress('c.anders@pcs.hants.sch.uk');
    $mail->addAddress('e.capaldi@pcs.hants.sch.uk');
    $mail->Subject    = 'Accessibility Policy Visited';
    $mail->Body       = "Someone has clicked on the Accessibility Policy from the " . $source . " page.\r\n\r\nVisited: " . date('l jS F Y') . ' at ' . date('g:ia') . '.';
    $mail->send();
}

header('Location: /assets/policies/Accessibility - December 2024.pdf', true, 302);
exit;