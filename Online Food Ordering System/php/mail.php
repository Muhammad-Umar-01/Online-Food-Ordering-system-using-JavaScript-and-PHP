<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];

$to = "uilyas146@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@thefoodie.com" . "\r\n" .
"CC: muhammadumar695@gmail.com";

    if($email!=NULL){
        mail($to,$subject,$txt,$headers);
    }
//redirect
echo "Thank You , Your Message has been Send. I will contact you shortly";
header(" Refresh : 2 ;Location:contact.php");
?>