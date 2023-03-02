<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

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
        $mail->Subject = 'Message Recived (Contact Page)';
        $mail->MsgHTML('HTML code');// Message body

        $mail->addAddress('hasnaynajmal@gmail.com');
        $mail->Body = '<h3>Name : ' .$name. '<br> Email :' .$email. '<br> Subject :' .$subject. '<br> Message :' .$message. '<br> </h3>';

        $mail->send();
        $alert = '<span>Your Message Has Been Sent! Thank You for Contacting us.</span>';
    } catch (Exception $e)
    { 
        $alert = '<span>'.$e->getMessage().'</span>';
    }
}

?>