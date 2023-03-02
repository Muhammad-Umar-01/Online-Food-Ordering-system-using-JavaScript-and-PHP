<?php

use PHPMailer\PHPMailer\PHPMailer;
require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

session_start();
include 'login.php'; 



$alertsub = '';

if(isset($_POST['submit-inv']))
{
    $emailsubs = $_SESSION['Email'];
    $invno = $_POST['invoiceuser-number'];
    $a=  $_SESSION['First Name'];
    $b=  $_SESSION['Last Name'];
    $c= $_SESSION['Address'];

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
        $mail->Subject = 'Food Order Confirmation';
        $mail->MsgHTML('HTML code');// Message body

        $mail->addAddress('uilyas146@gmail.com');
        $mail->Body = '<h3>Your Food Order Has Been Placed.</h3>';

        $mail->send();
        $alertsub = '<span> <br>  </span>';
    } catch (Exception $e)
    { 
        $alertsub = '<span>'.$e->getMessage().'</span>';
    }
}

?>