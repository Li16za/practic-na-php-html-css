<?php
	//sql.php
	$conn = mysqli_connect("localhost", "liza", "Password01!","praktika");//соединение с сервером
	if(!$conn) { //если не может выбрать базу данных
	    echo "Извините, ошибка соединения";//Показывает сообщение об ошибке
	    exit(); //Позволяет работать остальным скриптам PHP
	}
	else {
	    echo "Подключение установлено";
	}
?>