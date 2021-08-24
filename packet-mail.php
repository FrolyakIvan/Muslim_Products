<?php 
	//Принимаем постовые данные	
	$P_name = $_POST['P_name'];
	$P_tel = $_POST['P_tel'];
	$P_email = $_POST['P_email'];
	//Тут указываем на какой ящик посылать письмо
	$to = "yyvan73@yandex.ru";
	//Далее идет тема и само сообщение
	// Тема письма
	$subject = "Packet";
	// Сообщение письма
	$message = "
	
	Имя: ".htmlspecialchars($P_name)."
	Tелефон: ".htmlspecialchars($P_tel)."
	Почта: ".htmlspecialchars($P_email);
	// Отправляем письмо при помощи функции mail();
	$headers = "From: <muslum-products@muslum-products.ru>\r\n Content-type: Muslum Products; charset=UTF-8 \r\n";
	mail ($to, $subject, $message, $headers);
	// Перенаправляем человека на страницу благодарности и завершаем скрипт
	exit();
 ?>