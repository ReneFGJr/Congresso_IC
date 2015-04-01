<?
$include = '../../../_include/';
require($include."sisdoc_email_new.php");
require($include."sisdoc_debug.php");
echo 'e-mail (new)';
echo '<HR>';

/* Dados */
$smtp = 'mail.sisdoc.com.br';
$from = 'rene@sisdoc.com.br';
$from_name = 'Rene F. Gabriel Jr';
$pass = 'Viviane@1970';
$replay = 'renefgj@gmail.com';
$email_to = 'renefgj@gmail.com';
$title_sample = 'Teste de e-mail';

$from = 'proethos@paho.org';
$from_name = 'ProEthos';
$smtp = 'esmeralda.bireme.br';
$pass = 'bir@2012#';
$user = 'appwp';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';
$mail->Host = $smtp;
$mail->Port = 25;
$mail->SMTPAuth = true;
$mail->Username = $user;
$mail->Password = $pass;
$mail->setFrom($from, $from_name);

/* From name */
			$mail -> FromName = $from_name;
			$mail -> From = $from;

//Set an alternative reply-to address
$mail->addReplyTo($replay, $from_name);
echo '<HR>Replay to:'.$replay.' '.htmlspecialchars($from_name).'<HR>';

//Set who the message is to be sent to
$mail->addAddress($email_to, 'Proethos User');
//Set the subject line
$mail->Subject = $title_sample;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($message_sample, dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->Body = 'This is a <B>plain-text</B> message body';
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

enviaremail('renefgj@gmail.com','','Titulo','<B>Teste</B>');
echo 'Finalizado';
?>
