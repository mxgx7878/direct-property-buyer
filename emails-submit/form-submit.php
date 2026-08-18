<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require dirname(__DIR__) . '/vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Invalid request method.');
}

/* Basic spam protection */
if (!empty($_POST['website'])) {
    exit;
}

$formType = trim($_POST['form_type'] ?? 'Website Enquiry');
$formType = preg_replace('/[^a-zA-Z0-9 \-\/]/', '', $formType);

$replyEmail = trim($_POST['email'] ?? '');
$replyName  = trim($_POST['name'] ?? 'Website Visitor');

if (
    $replyEmail !== '' &&
    !filter_var($replyEmail, FILTER_VALIDATE_EMAIL)
) {
    exit('Please enter a valid email address.');
}

function fieldLabel($key)
{
    return ucwords(str_replace(['_', '-'], ' ', $key));
}

function cleanValue($value)
{
    if (is_array($value)) {
        $value = implode(', ', $value);
    }

    return htmlspecialchars(trim((string) $value), ENT_QUOTES, 'UTF-8');
}

$ignoredFields = [
    'form_type',
    'website',
    'submit',
    'submit_enquiry'
];

$emailRows = '';
$textBody  = '';

foreach ($_POST as $key => $value) {
    if (in_array($key, $ignoredFields, true)) {
        continue;
    }

    $label      = fieldLabel($key);
    $cleanValue = cleanValue($value);

    if ($cleanValue === '') {
        $cleanValue = 'Not provided';
    }

    $emailRows .= '
        <tr>
            <td style="
                padding:12px;
                border:1px solid #dddddd;
                width:35%;
                font-weight:bold;
                background:#f7f7f7;
            ">
                ' . cleanValue($label) . '
            </td>

            <td style="
                padding:12px;
                border:1px solid #dddddd;
            ">
                ' . nl2br($cleanValue) . '
            </td>
        </tr>
    ';

    $textBody .= $label . ': ' . strip_tags($cleanValue) . "\n";
}

if ($emailRows === '') {
    exit('No form information was received.');
}

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'mail.directpropertybuyer.com.au';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'email@directpropertybuyer.com.au';
    $mail->Password   = '@Admin!23#';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $mail->CharSet = 'UTF-8';

    $mail->setFrom(
        'email@directpropertybuyer.com.au',
        'Direct Property Buyer Website'
    );

    $mail->addAddress(
        'brad@directpropertybuyer.com.au',
        'Brad'
    );

    if (
        $replyEmail !== '' &&
        filter_var($replyEmail, FILTER_VALIDATE_EMAIL)
    ) {
        $safeReplyName = str_replace(["\r", "\n"], ' ', $replyName);
        $mail->addReplyTo($replyEmail, $safeReplyName);
    }

    $mail->isHTML(true);

    $mail->Subject = 'New Submission: ' . $formType;

    $mail->Body = '
        <div style="
            max-width:700px;
            margin:20px auto;
            font-family:Arial, sans-serif;
            color:#222222;
        ">
            <div style="
                padding:20px;
                background:#A8752A;
                color:#ffffff;
            ">
                <h2 style="margin:0">' . cleanValue($formType) . '</h2>
                <p style="margin:8px 0 0">New website form submission</p>
            </div>

            <table style="
                width:100%;
                border-collapse:collapse;
            ">
                ' . $emailRows . '
            </table>
        </div>
    ';

    $mail->AltBody =
        $formType .
        "\n\nNew website form submission\n\n" .
        $textBody;

    $mail->send();

    header('Location: ../thank-you.php');
    exit;

} catch (Exception $e) {
    error_log('PHPMailer error: ' . $mail->ErrorInfo);

    http_response_code(500);
    exit('Sorry, your submission could not be sent. Please try again.');
}