<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alertsub = '';

if(isset($_POST['submit-sub']))
{
    $emailsubs = $_POST['subemail'];

    try
    {
        $mail->isSMTP();
        $mail->CharSet = "utf-8";// set charset to utf8
        $mail->SMTPAuth = true;
        //$mail->SMTPSecure = false;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        //$mail->SMTPAutoTLS = false;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;

        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            ]
        ];

        $mail->isHTML(true);

        $mail->Username = 'hasnaynajmal@gmail.com';
        $mail->Password = 'joyvqtqwuojlhonw'; 
        
        $mail->setFrom('hasnaynajmal@gmail.com');
        $mail->Subject = 'Foodie Daily Food News Subscription';
        $mail->MsgHTML('HTML code');// Message body

        $mail->addAddress($emailsubs);
        $mail->Body = '<h3>Thank you for subscribing to our daily food news email. We appreciate your concern. <br> Note: This is mail integration test. <br> AUTO GENERATED MESSAGE <br> If you did not subscribed, please ignore this email.</h3>';

        $mail->send();
        $alertsub = '<span>You have subscribed to our daily news.</span>';
    } catch (Exception $e)
    { 
        $alertsub = '<span>'.$e->getMessage().'</span>';
    }
}

?>