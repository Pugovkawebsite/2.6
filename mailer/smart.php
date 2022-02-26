<?php 

$name = $_POST['First_Name'];
$lastname = $_POST['Last_Name'];
$phone = $_POST['phone'];
$question = $_POST['Your_Question'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

// $mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.rambler.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'example_account@rambler.ru';                 // Наш логин
$mail->Password = 'P@1515p15';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('example_account@rambler.ru', 'CloudBudget');   // От кого письмо 
$mail->addAddress('irinaivanova71.ira@yandex.ru');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Данные';
$mail->Body    = '
		Пользователь оставил данные <br> 
	First Name: ' . $name . ' <br>
	Last Name: ' . $lastname . ' <br>
	Номер телефона: ' . $phone . '<br>
	question: ' . $question . '';

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>