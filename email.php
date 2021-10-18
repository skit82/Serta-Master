<?php
	
	if(!empty($_POST['callform-login']) and !empty($_POST['callform-tel']) and !empty($_POST['callform-email'])) {
		$name = trim(strip_tags($_POST['callform-login']));
		$phone = trim(strip_tags($_POST['callform-tel']));
		$mail = trim(strip_tags($_POST['callform-email']));

		mail('sertamaster23@yandex.ru', 'Заявка на соотрудничество', 'Вам написал: '.$name.'<br />Его номер: '.$phone.'<br />Его почта: '.$mail);

		echo  "<script>document.location.href='/thanks.php';</script>";

		exit;
	} 
	else {
		echo "Для отправки сообщения заполните все поля! $back";
		exit;
	}
?>