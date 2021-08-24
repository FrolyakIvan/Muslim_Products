<?php 
	//Принимаем постовые данные	
	$F_name = $_POST['F_name'];
	$F_tel = $_POST['F_tel'];
	$F_email = $_POST['F_email'];
	//Тут указываем на какой ящик посылать письмо
	$to = "yyvan73@yandex.ru";
	//Далее идет тема и само сообщение
	// Тема письма
	$subject = "Contact";
	// Сообщение письма
	$message = "
	
	Имя: ".htmlspecialchars($F_name)."
	Tелефон: ".htmlspecialchars($F_tel)."
	Почта: ".htmlspecialchars($F_email);
	// Отправляем письмо при помощи функции mail();
	$headers = "From: <muslum-products@muslum-products.ru>\r\n Content-type: Muslum Products; charset=UTF-8 \r\n";
	mail ($to, $subject, $message, $headers);
	// Перенаправляем человека на страницу благодарности и завершаем скрипт
	exit();
 ?>