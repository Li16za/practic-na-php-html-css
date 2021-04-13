<?php
	//reg.php
	//соединение с SQL
	$conn = mysqli_connect("localhost", "liza", "Password01!","praktika");//соединение с сервером
	if(!$conn) { //если не может выбрать базу данных
	    echo "Извините, ошибка соединения с бд/>";//Показывает сообщение об ошибке
	    exit(); //Позволяет работать остальным скриптам PHP
	}
	else
	    session_start(); //начало сессии для записи
	    $errmsg = array(); //массив для хранения ошибок 
	     
	    $errflag = false; //флаг ошибки
	    $username = $_POST['username'];//имя пользователя
	    $password = $_POST['password'];//пароль
	    $rpassword = $_POST['rpassword'];//повтор пароля
	    //проверка имени пользователя
	if($username == '') {
	    $errmsg[] = 'имя пользователя не введено'; //ошибка
	    $errflag = true; //поднимает флаг в случае ошибки
	}
	//проверка пароля
	if($password == '') {
	    $errmsg[] = 'Пароль не введен'; //ошибка
	    $errflag = true; //поднимает флаг в случае ошибки
	}
	//проверка повтора пароля
	if($rpassword == '') {
	    $errmsg[] = 'Повтор пароля не введен';//ошибка
	    $errflag = true; //поднимает флаг в случае ошибки
	}
	//проверка валидности пароля
	if(strcmp($password, $rpassword) != 0 ) {
	    $errmsg[] = 'Пароли не совпадают';//ошибка
	    $errflag = true; //поднимает флаг в случае ошибки
	}
	//проверка, свободно ли имя пользователя
	if($username != '') {
	    $qry = "SELECT * FROM `users` WHERE `Username` = '" . $username . "'"; //запрос к MySQL
	    $result = $conn->query($qry);
	    if($result->num_rows > 0) {//если имя уже используется
	        $errmsg[] = 'Имя пользователя уже существует, введите другое имя'; //сообщение об ошибке
	        $errflag = true; //поднимает флаг в случае ошибки
	    }
	}
	//если данные не прошли валидацию, направляет обратно к форме регистрации
	if($errflag) {
	    $_SESSION['ERRMSG'] = $errmsg; //сообщение об ошибке
	    session_write_close(); //закрытие сессии
	    header("location: register.php");//перенаправление
	    exit();
	}
	//добавление данных в базу
	$sql = "INSERT INTO `users`( `Username`, `Password`) VALUES ('$username','$password')";
	$result = $conn->query($sql);
	//проверка, был ли успешным запрос на добавление
	if($result) {
	    $vivod = "Благодарим Вас за регистрацию, " . $username . ". Пожалуйста, входите";
	} 
	else {
	    die("Ошибка, обратитесь позже");
	}
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>регистрация</title>
	</head>
	<body bgcolor="MidnightBlue">
		<table align="center" bgcolor="RoyalBlue" class="table">
	        <tr>
	            <td>
	            	<FONT COLOR="Snow" face="Time New Roman">
		            	<H1 ALIGN="center"> <?php echo $vivod ?>
						</H1>
					</FONT> 
				</td>
	        </tr>
	    </table>
		<table align="center">
	    	<form action='login2.php'>
		        <tr>
		            <td><input type='submit' class="b1" value='Сюда'></td>
		        </tr> 
			</form>
		</table>
	</body>
</html>