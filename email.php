<?php
	$back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
 
	$name = $_POST['callform-login'];
 	$tel = $_POST['callform-tel'];
 	$email = $_POST['callform-email'];

 	$name = htmlspecialchars($name);
 	$tel = htmlspecialchars($tel);
 	$email = htmlspecialchars($email);

 	$name = urldecode($name);
 	$tel = urldecode($tel);
 	$email = urldecode($email);

 	$name = trim($name);
 	$tel = trim($tel);
 	$email = trim($email);

 	if (mail('a.abrosimow2012@yandex.ru',
 			'Заявка на соотрудничество',
 			'Имя: '.$name.'\n'.
 			'Телефон: '.$tel.'\n'.
 			'Email: '.$email.'\n')
 	){
 		echo ('Письмо успешно отправлено!');
 	}

 	else {
 		echo('Есть ошибки! Проверьте данные...');
 	}
?>