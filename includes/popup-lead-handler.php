<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php');
    exit;
}

$returnUrl = $_POST['return_url'] ?? '../index.php';
$parsedReturn = parse_url($returnUrl);
if (!is_array($parsedReturn) || !isset($parsedReturn['host']) || $parsedReturn['host'] !== ($_SERVER['HTTP_HOST'] ?? '')) {
    $returnUrl = '../index.php';
}

$name = trim($_POST['popup_full_name'] ?? '');
$email = trim($_POST['popup_email'] ?? '');
$mobile = trim($_POST['popup_mobile'] ?? '');
$service = trim($_POST['popup_service'] ?? '');
$message = trim($_POST['popup_message'] ?? '');
$website = trim($_POST['popup_website'] ?? '');

if ($website !== '') {
    header('Location: ' . $returnUrl);
    exit;
}

if ($name === '' || $email === '' || $mobile === '' || $service === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $separator = strpos($returnUrl, '?') !== false ? '&' : '?';
    header('Location: ' . $returnUrl . $separator . 'popup_lead=error');
    exit;
}

if (preg_match('/[\r\n]/', $name . $email . $mobile . $service)) {
    $separator = strpos($returnUrl, '?') !== false ? '&' : '?';
    header('Location: ' . $returnUrl . $separator . 'popup_lead=error');
    exit;
}

$to = 'mohammedtahairp@gmail.com';
$subject = 'New Lead From Website Popup';
$body = "A new popup lead was submitted.\n\n";
$body .= "Full Name: " . $name . "\n";
$body .= "Email: " . $email . "\n";
$body .= "Mobile: " . $mobile . "\n";
$body .= "Looking For: " . $service . "\n";
$body .= "Message:\n" . $message . "\n";

$headers = "From: noreply@oreotechnologies.com\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "MIME-Version: 1.0\r\n";

$mailSent = mail($to, $subject, $body, $headers);
$separator = strpos($returnUrl, '?') !== false ? '&' : '?';
header('Location: ' . $returnUrl . $separator . 'popup_lead=' . ($mailSent ? 'success' : 'error'));
exit;
