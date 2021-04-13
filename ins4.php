<?php 
	#Скрипт обработки загружаемых данных.
	/* Определяем значения переменным */ 
	$Id_officer = $_POST['stolbec1'];
	$Id_location = $_POST['stolbec2'];
	$Date_incident = $_POST['stolbec3'];
	$Description = $_POST['stolbec4'];
	$conn = mysqli_connect("localhost", "liza", "Password01!","praktika");//соединение с сервером
	if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
	else {
		if(($Id_officer=='')or ($Id_location=='') or ($Date_incident=='') or ($Description=='') ) {
	    	$vivod =  "The entry was not added to the database! Check that the fields are filled in correctly."; //поднимает флаг в случае ошибки
		}
		else
		{
			$sql = "INSERT INTO Incident (Id_officer, Id_location, Date_incident, Description) VALUES ('" .  $Id_officer . "' , '" . $Id_location . "' , '" . $Date_incident . "' , '" . $Description . "')";
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

			<form action='insert4.html'>
		        <tr align="center">
		            <td><input type='submit' class="b1" value='Back to the add'></td>
	        </form>
	    	<form action='menut4.html'>
		        <tr>
		            <td><input type='submit' class="b1" value='Back to menu'></td>
		        </tr> 
			</form>
		</table>
	</body>
</html> 