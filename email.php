<?php
	$back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
 
	if(!empty($_POST['callform-login']) and !empty($_POST['callform-tel']) and !empty($_POST['callform-email']) and !empty($_POST['message'])){
		$name = trim(strip_tags($_POST['callform-login']));
		$phone = trim(strip_tags($_POST['callform-tel']));
		$mail = trim(strip_tags($_POST['callform-email']));
 
		mail('a.abrosimow2012yandex.ru', 'Заявка на соотрудничество', 'Вам написал: '.$name.'<br />Его номер: '.$phone.'<br />Его почта: '.$mail.'<br />Его сообщение: '.$message,"Content-type:text/html;charset=windows-1251");
 
		echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в ближайшее время<Br> $back";
 
		exit;
	} 
	else {
		echo "Для отправки сообщения заполните все поля! $back";
		exit;
	}
?>