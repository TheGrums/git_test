<?php
ini_set("display_errors",true);
require_once('./lib/phpmailer/PHPMailerAutoload.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch

$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);                 // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;
  $mail->Host = 'scribvs.com';
  $mail->Port = 25;                  // set the SMTP port for the GMAIL server
  $mail->addCustomHeader('List-Unsubscribe', '<webmaster@scribvs.com>, <http://scribvs.com>');
  $mail->Username   = "webmaster@scribvs.com"; // SMTP account username
  $mail->Password   = "BigBang3640";
  $mail->AddReplyTo('webmaster@scribvs.com', 'Scribvs');
  $mail->AddAddress('lologrum10@gmail.com', 'Ceci est un test...');
  $mail->SetFrom('webmaster@scribvs.com', 'Scribvs');
  $mail->AddReplyTo('webmaster@scribvs.com', 'First Last');
  $mail->Subject = 'Un truc pas tres important';
  $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
  $mail->MsgHTML('<h1>yoloooo</h1>'); // attachment
  $mail->Send();


?>
