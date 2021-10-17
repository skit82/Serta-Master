

<?php
	$back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";

	if(!empty($_POST['callform-login']) and !empty($_POST['callform-tel']) and !empty($_POST['callform-email'])) {
		$name = trim(strip_tags($_POST['callform-login']));
		$phone = trim(strip_tags($_POST['callform-tel']));
		$mail = trim(strip_tags($_POST['callform-email']));

		mail('sertamaster23@yandex.ru', 'Заявка на соотрудничество', 'Вам написал: '.$name.'<br />Его номер: '.$phone.'<br />Его почта: '.$mail);

		echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в ближайшее время<Br> $back";

		exit;
	} 
	else {
		echo "Для отправки сообщения заполните все поля! $back";
		exit;
	}
?>