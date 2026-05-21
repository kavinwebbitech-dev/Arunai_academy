<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $mail = new PHPMailer(true);

    $name    = trim($_POST['name'] ?? '-');
    $email   = trim($_POST['email'] ?? '-');
    $phone   = trim($_POST['phone'] ?? '-');
    $course  = trim($_POST['course'] ?? '-');
    $message = trim($_POST['message'] ?? '-');

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'sxvcontact@gmail.com';
        $mail->Password   = 'mzpiozycrvtdxtju'; // app password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Sender & Recipient
        $mail->setFrom('sxvcontact@gmail.com', 'Contact Form');
        $mail->addAddress('gowtham.webbitech@gmail.com');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Contact Form';

        $mail->Body = "
        <h2 style='font-family:Arial,Helvetica,sans-serif;'>Website Enquiry Details</h2>
        <table width='100%' cellpadding='8' cellspacing='0' style='border-collapse:collapse;font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#333;'>

            <tr style='background:#f2f2f2;'>
                <td width='35%' style='border:1px solid #ddd;'><b>Name</b></td>
                <td style='border:1px solid #ddd;'>".htmlspecialchars($name)."</td>
            </tr>

            <tr>
                <td style='border:1px solid #ddd;'><b>Email</b></td>
                <td style='border:1px solid #ddd;'>".htmlspecialchars($email)."</td>
            </tr>

            <tr style='background:#f2f2f2;'>
                <td style='border:1px solid #ddd;'><b>Phone</b></td>
                <td style='border:1px solid #ddd;'>".htmlspecialchars($phone)."</td>
            </tr>

            <tr>
                <td style='border:1px solid #ddd;'><b>Interested In</b></td>
                <td style='border:1px solid #ddd;'>".htmlspecialchars($course)."</td>
            </tr>

            <tr>
                <td valign='top' style='border:1px solid #ddd;'><b>Message</b></td>
                <td style='border:1px solid #ddd;'>".nl2br(htmlspecialchars($message))."</td>
            </tr>

        </table>
        ";

        $mail->send();

        header("Location: /?success=1");
        exit;

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
