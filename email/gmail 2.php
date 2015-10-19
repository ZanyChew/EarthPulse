<?php
date_default_timezone_set('Etc/UTC');

require 'PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;

$mail->Username = "is306earthpulse@gmail.com";
$mail->Password = "earthpulse!";

$mail->setFrom('from@example.com', 'First Last');
//$mail->addReplyTo('jk.chew.2013@sis.smu.edu.sg', 'Meow Lee');
//$mail->addAddress('jk.chew.2013@sis.smu.edu.sg', 'Meow Tan');
$mail->addReplyTo('purum.sok.2013@sis.smu.edu.sg', 'Meow Lee');
$mail->addAddress('purum.sok.2013@sis.smu.edu.sg', 'Meow Tan');

$mail->Subject = 'EarthPulse Alert!';
$mail->msgHTML('Principal of NYP: Cyclone at Chiang Mai. Requesting assistance.');
$mail->AltBody = 'Principal of NYP: Cyclone at Chiang Mai. Requesting assistance.';

//$mail->addAttachment('images/phpmailer_mini.png');

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
?>