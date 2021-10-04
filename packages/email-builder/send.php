<?php
include_once 'config.php';
require 'includes/phpmailer/PHPMailerAutoload.php';
include_once 'includes/utils.php';


$body=$_POST["html"];
$email=$_POST["mail"];

$response=createHtmlandZipFile($body);

//if this html generated successfully , send email that html
if ($response['code']==0) {
  $body=$response['html'];
}




$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = EMAIL_SMTP;                     // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAIL_ADDRESS;                 // SMTP username
$mail->Password = EMAIL_PASS;                   // SMTP password

$mail->setFrom(EMAIL_ADDRESS, 'CidCode - Email Builder');
$mail->addAddress($email);     // Add a recipient
$mail->isHTML(true);                              // Set email format to HTML
$mail->CharSet = 'UTF-8';
$mail->Subject = 'Email Newsletter Builder Template';
$mail->Body    = $body;
$mail->AltBody = 'This is the template for testing for http://emailbuilder.cidcode.net/';


  // if (isset($_FILES['file']) &&
  //     $_FILES['file']['error'] == UPLOAD_ERR_OK) {
  //     $mail->AddAttachment($_FILES['file']['tmp_name'],
  //                          $_FILES['file']['name']);
  // }

  $totalFiles = count($_FILES['attachments']['tmp_name']);
  for ($i = 0; $i < $totalFiles; $i++) {
     $path = $_FILES['attachments']['tmp_name'][$i];
     $name = $_FILES['attachments']['name'][$i];

     $mail->AddAttachment($path,$name);
  }

$response=array();

if(!$mail->send()) {
   $response['code']=300;
   $response['message']='Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
} else {
   $response['code']=0;
   $response['message']='Message has been sent';
}

echo  json_encode($response);
