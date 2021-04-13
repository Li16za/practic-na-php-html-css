<?php
	include("sql.php"); //соединение с SQL
	session_start(); //начало сессии для записи
	$errmsg = array(); //массив для сохранения ошибок
	$errflag = false; //флаг ошибки
	$username = $_POST['username'];//имя пользователя
	$password = $_POST['password'];//пароль
	//проверка имени пользователя
	if($username == '') {
	    $errmsg[] = 'Имя пользователя не введено'; //ошибка
	    $errflag = true; //поднимает флаг в случае ошибки
	}
	//проверка пароля
	if($password == '') {
	    $errmsg[] = 'Пароль не введен'; //ошибка
	    $errflag = true; //поднимает флаг в случае ошибки
	}
	//если флаг ошибки поднят, направляет обратно к форме регистрации
	if($errflag) {
	    $_SESSION['ERRMSG'] = $errmsg; //записывает ошибки
	    session_write_close(); //закрытие сессии
	    header("location: login2.php"); //перенаправление
	    exit();
	}
	//запрос к базе данных
	$qry = "SELECT * FROM `users` WHERE `Username` = '$username' AND `Password` = '$password'";
	$result = $conn->query($qry);
	//проверка, был ли запрос успешным (есть ли данные по нему)
	if($result->num_rows  == 1) {
	    while($row = $result->fetch_assoc()) {
	        $_SESSION['USERNAME'] = $username;//устанавливает, совпадает ли имя пользователя с сессионным 
	        session_write_close(); //закрытие сессии
	        if ($username=== 'admin'){
	        	header("location: auth.php");//перенаправление
	        }
	        else {header("location: auth2.php");}
	        }
	    } 
	else {
		$_SESSION['ERRMSG'] = "Invalid username or password"; //ошибка
	    session_write_close(); //закрытие сессии
	    header("location: lognet.html"); //перенаправление
	    exit(); 
	}
?>