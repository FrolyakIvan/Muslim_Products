<?php 
	//Принимаем постовые данные	
	$C_name = $_POST['C_name'];
	$C_tel = $_POST['C_tel'];
	$C_email = $_POST['C_email'];
	//Тут указываем на какой ящик посылать письмо
	$to = "yyvan73@yandex.ru";
	//Далее идет тема и само сообщение
	// Тема письма
	$subject = "Conception";
	// Сообщение письма
	$message = "
	
	Имя: ".htmlspecialchars($C_name)."
	Tелефон: ".htmlspecialchars($C_tel)."
	Почта: ".htmlspecialchars($C_email);
	// Отправляем письмо при помощи функции mail();
	$headers = "From: <muslum-products@muslum-products.ru>\r\n Content-type: Muslum Products; charset=UTF-8 \r\n";
	mail ($to, $subject, $message, $headers);
	// Перенаправляем человека на страницу благодарности и завершаем скрипт
	exit();
 ?>