<!-- <?php

// $method = $_SERVER['REQUEST_METHOD'];

//Script Foreach
// $c = true;
// if ( $method === 'POST' ) {

// 	$project_name = trim($_POST["project_name"]);
// 	$admin_email  = trim($_POST["admin_email"]);
// 	$form_subject = trim($_POST["form_subject"]);

// 	foreach ( $_POST as $key => $value ) {
// 		if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
// 			$message .= "
// 			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
// 				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
// 				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
// 			</tr>
// 			";
// 		}
// 	}
// } else if ( $method === 'GET' ) {

// 

<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("gavrilova-e@yandex.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: gavrilova-e@yandex.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>