<?php
 require("../../PHPMailer/src/PHPMailer.php");
 require("../../PHPMailer/src/SMTP.php");
function smtpmailer($to, $from, $from_name, $subject, $body){
  $mail = new PHPMailer();
  $mail -> IsSMTP();
  $mail -> SMTPDebug = 0;
  $mail -> SMTPAuth =true;
  $mail -> SMTPSecure = 'ssl';
  $mail -> Host = 'smtp.gmail.com';
  $mail -> Port = 465;
  $mail -> Username = GUSER;
  $mail -> Password = GPWD;
  $mail -> CharSet = 'UTF-8';
  $mail -> SetFrom($from,$from_name);
  $mail -> Subject = $subject;
  $mail -> Body = $body;
  $mail -> AddAddress($to);
  if (!$mail -> Send()) {
    $message = 'Gui mail bi loi'.$mail->ErrorInfo;
    return false;
  }
  else{
    $message = 'Thu cua ban da gui di';
    return true;
  }

  
}
?>