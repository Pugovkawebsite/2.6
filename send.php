<?php
$fio = $_POST['fio'];
$email = $_POST['phone'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("irinaivanova71.ira@yandex.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: example_account@rambler.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>