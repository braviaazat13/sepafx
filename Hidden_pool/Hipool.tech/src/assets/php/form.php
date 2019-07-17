<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$email_from = 'Hidden Pool';
$email_subject = "New Form submission";
$email_body = "You have received a new message from the user $name.\n".
							"Here is the message:\n $message. \n".
							"User Email - $visitor_email. ";
$to = "support@hipool.tech";
$headers = "From: $email_from \r\n";
mail($to,$email_subject,$email_body,$headers);
//?>


<?//
//if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")&&(isset($_POST['message'])&&$_POST['message']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
//	$to = '279733@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
//	$subject = 'Обратный звонок'; //Заголовок сообщения
//	$message = '
//                <html>
//                    <head>
//                        <title>'.$subject.'</title>
//                    </head>
//                    <body>
//                        <p>Name: '.$_POST['name'].'</p>
//                        <p>Phone: '.$_POST['phone'].'</p>
//                        <p>Message: '.$_POST['message'].'</p>
//                    </body>
//                </html>'; //Текст нащего сообщения можно использовать HTML теги
//	$headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
//	$headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
//	mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
//}
//?>



