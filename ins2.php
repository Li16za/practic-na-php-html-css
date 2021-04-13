<?php 
	#Скрипт обработки загружаемых данных.
	/* Определяем значения переменным */ 
	$Id_department = $_POST['stolbec1'];
	$Last_name = $_POST['stolbec2'];
	$Name = $_POST['stolbec3'];
	$Middle_name = $_POST['stolbec4'];
	$The_title = $_POST['stolbec5'];
	$Id_card = $_POST['stolbec6'];
	$conn = mysqli_connect("localhost", "liza", "Password01!","praktika");//соединение с сервером
	if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
	else {
		if(($Id_department=='') or ($Last_name=='') or ($Name=='') or ($Middle_name=='') or ($The_title=='') or ($Id_card=='') ){
	    	$vivod =  "The entry was not added to the database! Check that the fields are filled in correctly. "; //поднимает флаг в случае ошибки
		}
		else
		{
			$sql = "INSERT INTO Officer (Id_department, Last_name, Name, Middle_name, The_title, Id_card) VALUES ('" .  $Id_department . "' , '" . $Last_name . "' , '" . $Name . "' , '" . $Middle_name . "' , '" . $The_title . "' , '" . $Id_card . "')";
			$result = $conn->query($sql);
			$vivod =  "The entry is entered in the database!";
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Insert into Officer</title>
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

			<form action='insert2.html'>
		        <tr align="center">
		            <td><input type='submit' class="b1" value='Back to the add'></td>
	        </form>
	    	<form action='menut2.html'>
		        <tr>
		            <td><input type='submit' class="b1" value='Back to menu'></td>
		        </tr> 
			</form>
		</table>
	</body>
</html> 