<?php
	//register.php
	session_start(); //начало сессии
	if(isset($_SESSION['ERRMSG']) &&is_array($_SESSION['ERRMSG']) &&count($_SESSION['ERRMSG']) >0 ) { //если есть ошибки сессии
		$err = "<table>"; //начало таблицы                                 
		foreach($_SESSION['ERRMSG'] as $msg) {//устанавливает каждую ошибку
	        $err .= "<tr><td>" . $msg . "</td></tr>"; //записывает их в переменную
	    }
	    $err .= "</table>"; //конец таблицы
	    unset($_SESSION['ERRMSG']); //уничтожает сессию
	}
?>
<html>
    <head>
	    <link rel="stylesheet" type="text/css" href="style.css">
	    <title>Форма регистрации</title>
	    <table align="center" bgcolor="RoyalBlue" class="table">
	        <tr>
	            <td>
	            	<FONT COLOR="Snow" face="Time New Roman">
		            	<H1 ALIGN="center"> Регистрация
						</H1>
					</FONT> 
				</td>
	        </tr>
	    </table>
	</head>
	<body bgcolor="MidnightBlue">
	    <table align="center"  class="table2"  >
	        <form action='reg.php' method='post'>
		        <tr>
		            <td><?php echo $err; ?></td>
		        </tr>
		        <tr align="center">
		            <td>Имя пользователя</td>
		            <td><input class="input" type='text' name='username'></td>
		        </tr>
		        <tr align="center">
		            <td>Пароль</td>
		            <td><input class="input" type='password' name='password'></td>
		        </tr>
		        <tr align="center">
		            <td>Повтор пароля</td>
		            <td><input class="input" type='password' name='rpassword'></td>
		        </tr>
		        <tr align="center">
		            <td><input class="b1" type='submit' value='Зарегистрировать'></td>
	        </form>
	        <form action='login2.php'>
		            <td><input type='submit' class="b1" value='Назад'></td>
		        </tr>
	        </form>
	    </table>   
	</body>
</html>