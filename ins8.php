<?php 
	#Скрипт обработки загружаемых данных.
	/* Определяем значения переменным */ 
	$Id_officer = $_POST['stolbec1'];
	$Date_resolution = $_POST['stolbec2'];
	$Conclution = $_POST['stolbec3'];
	$conn = mysqli_connect("localhost", "liza", "Password01!","praktika");//соединение с сервером
	if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
	else {
		if($Id_officer=='') {
	    	$vivod =  "The entry was not added to the database! Check that the fields are filled in correctly."; //поднимает флаг в случае ошибки
		}
		else
		{
			if($Date_resolution=='') {
	    	$vivod =  "The entry was not added to the database! Check that the fields are filled in correctly. "; //поднимает флаг в случае ошибки
			}
			else
			{
				if($Conclution=='') {
		    	$vivod =  "The entry was not added to the database! Check that the fields are filled in correctly. "; //поднимает флаг в случае ошибки
				}
				else
				{
							$sql = "INSERT INTO Resolution (Id_officer, Date_resolution, Conclution) VALUES ('" .  $Id_officer .  "' , '" . $Date_resolution . "' , '" . $Conclution . "')";
							$result = $conn->query($sql);
							$vivod =  "The entry is entered in the database!";
				}
			}
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
	    <link rel="stylesheet" type="text/css" href="style.css">
		<title>Insert into Resolution</title>
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

			<form action='insert8.html'>
		        <tr align="center">
		            <td><input type='submit' class="b1" value='Back to the add'></td>
	        </form>
	    	<form action='menut8.html'>
		        <tr>
		            <td><input type='submit' class="b1" value='Back to menu'></td>
		        </tr> 
			</form>
		</table>
	</body>
</html> 