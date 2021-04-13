<?php
	//login.php
	session_start(); //начало сессии
	if(isset($_SESSION['ERRMSG']) &&is_array($_SESSION['ERRMSG']) &&count($_SESSION['ERRMSG']) >0 ) { //если есть ошибки сессии
		$err = "<table>"; //Start a table
		foreach($_SESSION['ERRMSG'] as $msg) {//распознавание каждой ошибки
	    	$err .= "<tr><td>" . $msg . "</td></tr>"; //запись её в переменную
	    }
	    $err .= "</table>"; //закрытие таблицы
	    unset($_SESSION['ERRMSG']); //удаление сессии
	}
?>
<html>
	<head>
	    <link rel="stylesheet" type="text/css" href="style.css">
	    <title> ВХОД</title>
	    <table align="center" bgcolor="RoyalBlue" class="table">
	        <tr>
	            <td>
	            	<FONT COLOR="Snow" face="Time New Roman">
		            	<H1 ALIGN="center"> Вход
						</H1>
					</FONT> 
				</td>
	        </tr>
	    </table>
	</head>
	<body bgcolor="MidnightBlue">
	    <table align="center" class="table2"  >
	    	<tr>
	            <td><?php echo $err; ?></td>
	        </tr>
	        <form action='log2.php' method='post'>
	        	<tr align="center">
	            	<td><b>Имя пользователя</b></td>
	                <td><input class="input" type='text' name='username'></td>
	            </tr>
	            <tr align="center">
	                <td><b>Пароль</b></td>
	                <td><input class="input" type='password'name='password'></td>
	            </tr>
	            <tr align="center">
	                <td align="center"><input type='submit' class="b1" value='Войти'></td>
	    	</form>
	    	<form action='register.php'>
	            	<td><input type='submit' class="b1" value='Регистрация'></td>
	        	</tr>
	        </form>
	    </table>
	</body>
</html>