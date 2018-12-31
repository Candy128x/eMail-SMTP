<?php

require 'PHPMailer-master/PHPMailerAutoload.php';

$mailFrom = $_POST['mail_from'];
$mailFromPwd = $_POST['mail_from_pwd'];
$mailSub = $_POST['mail_sub'];
$mailMsg = $_POST['mail_msg'];

$mail = new PHPMailer();
$mail->IsSmtp();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = $mailFrom;
$mail->Password = $mailFromPwd;
$mail->SetFrom($mailFrom);
$mail->Subject = $mailSub;
$mail->Body = $mailMsg;
$mail->AddAddress("sondagarashish@gmail.com");

if (!$mail->Send()) {
    echo "Mail Not Sent";
} else {
    echo "Mail Sent";
}
