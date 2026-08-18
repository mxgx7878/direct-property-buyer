<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require dirname(__DIR__) . '/vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Invalid request method.');
}

/* Form values */
$name      = trim($_POST['name'] ?? '');
$phone     = trim($_POST['phone'] ?? '');
$email     = trim($_POST['email'] ?? '');
$address   = trim($_POST['address'] ?? '');
$owner     = trim($_POST['owner'] ?? '');
$condition = trim($_POST['condition'] ?? '');
$situation = trim($_POST['situation'] ?? '');
$timeline  = trim($_POST['timeline'] ?? '');
$message   = trim($_POST['message'] ?? '');
$consent   = isset($_POST['consent']) ? 'Yes' : 'No';

/* Required fields validation */
if ($name === '' || $phone === '' || $consent !== 'Yes') {
    exit('Please complete all required fields.');
}

if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit('Please enter a valid email address.');
}

/* Prevent email header injection */
$name  = str_replace(["\r", "\n"], ' ', $name);
$phone = str_replace(["\r", "\n"], ' ', $phone);
$email = str_replace(["\r", "\n"], '', $email);

function clean($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$mail = new PHPMailer(true);

try {
    /* SMTP configuration */
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; // Apna SMTP host
    $mail->SMTPAuth   = true;
    $mail->Username   = 'YOUR_SMTP_EMAIL';
    $mail->Password   = 'YOUR_SMTP_PASSWORD';

    /* Port 465 configuration */
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    /* Sender and recipient */
    $mail->setFrom(
        'YOUR_SMTP_EMAIL',
        'Website Enquiry'
    );

    $mail->addAddress(
        'martingarix7878@gmail.com',
        'Martin Garix'
    );

    /* Reply directly to the customer */
    if ($email !== '') {
        $mail->addReplyTo($email, $name);
    }

    $mail->isHTML(true);
    $mail->Subject = 'New Property Enquiry - ' . $name;

    $mail->Body = '
    <div style="font-family:Arial,sans-serif;max-width:650px;margin:auto">
        <div style="background:#A8752A;color:#ffffff;padding:20px">
            <h2 style="margin:0">New Property Enquiry</h2>
        </div>

        <table style="width:100%;border-collapse:collapse">
            <tr>
                <td style="padding:12px;border:1px solid #ddd"><strong>Full name</strong></td>
                <td style="padding:12px;border:1px solid #ddd">' . clean($name) . '</td>
            </tr>
            <tr>
                <td style="padding:12px;border:1px solid #ddd"><strong>Phone</strong></td>
                <td style="padding:12px;border:1px solid #ddd">' . clean($phone) . '</td>
            </tr>
            <tr>
                <td style="padding:12px;border:1px solid #ddd"><strong>Email</strong></td>
                <td style="padding:12px;border:1px solid #ddd">' . clean($email ?: 'Not provided') . '</td>
            </tr>
            <tr>
                <td style="padding:12px;border:1px solid #ddd"><strong>Property address</strong></td>
                <td style="padding:12px;border:1px solid #ddd">' . clean($address ?: 'Not provided') . '</td>
            </tr>
            <tr>
                <td style="padding:12px;border:1px solid #ddd"><strong>Owner status</strong></td>
                <td style="padding:12px;border:1px solid #ddd">' . clean($owner) . '</td>
            </tr>
            <tr>
                <td style="padding:12px;border:1px solid #ddd"><strong>Property condition</strong></td>
                <td style="padding:12px;border:1px solid #ddd">' . clean($condition) . '</td>
            </tr>
            <tr>
                <td style="padding:12px;border:1px solid #ddd"><strong>Situation</strong></td>
                <td style="padding:12px;border:1px solid #ddd">' . clean($situation) . '</td>
            </tr>
            <tr>
                <td style="padding:12px;border:1px solid #ddd"><strong>Timeline</strong></td>
                <td style="padding:12px;border:1px solid #ddd">' . clean($timeline) . '</td>
            </tr>
            <tr>
                <td style="padding:12px;border:1px solid #ddd"><strong>Message</strong></td>
                <td style="padding:12px;border:1px solid #ddd">' . nl2br(clean($message ?: 'No message provided')) . '</td>
            </tr>
            <tr>
                <td style="padding:12px;border:1px solid #ddd"><strong>Consent</strong></td>
                <td style="padding:12px;border:1px solid #ddd">' . clean($consent) . '</td>
            </tr>
        </table>
    </div>';

    $mail->AltBody =
        "New Property Enquiry\n\n" .
        "Full name: {$name}\n" .
        "Phone: {$phone}\n" .
        "Email: {$email}\n" .
        "Address: {$address}\n" .
        "Owner status: {$owner}\n" .
        "Property condition: {$condition}\n" .
        "Situation: {$situation}\n" .
        "Timeline: {$timeline}\n" .
        "Message: {$message}\n" .
        "Consent: {$consent}";

    $mail->send();

    /* Successful submission */
    header('Location: ../thank-you.html');
    exit;

} catch (Exception $e) {
    error_log('PHPMailer error: ' . $mail->ErrorInfo);

    http_response_code(500);
    exit('Sorry, your enquiry could not be sent. Please try again.');
}