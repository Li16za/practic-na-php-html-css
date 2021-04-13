<?php 
	#Скрипт обработки загружаемых данных.
	/* Определяем значения переменным */ 
	$Id_status = $_POST['stolbec1'];
	$Id_incident = $_POST['stolbec2'];
	$Id_a_criminal_record = $_POST['stolbec3'];
	$Last_name = $_POST['stolbec4'];
	$Name = $_POST['stolbec5'];
	$Middle_name = $_POST['stolbec6'];
	$Document = $_POST['stolbec7'];
	$N_document = $_POST['stolbec8'];
	$Address = $_POST['stolbec9'];
	$conn = mysqli_connect("localhost", "liza", "Password01!","praktika");//соединение с сервером
	if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
	}
	else 
	{
		if(($Id_status=='') or ($Id_incident=='') or  ($Id_a_criminal_record=='') or ($Last_name=='') or ($Name=='') or ($Middle_name=='') or ($Document=='') or ($N_document=='') or ($Address==''))
		{
	    	$vivod =  "The entry was not added to the database! Check that the fields are filled in correctly. "; //поднимает флаг в случае ошибки
		}
		else
		{
			$sql = "INSERT INTO Involved ( Id_status,Id_incident,Id_a_criminal_record,Last_name, Name, Middle_name, Document, N_document, Address) VALUES ('" . $Id_status . "' , '" . $Id_incident . "' , '" . $Id_a_criminal_record  . "' , '" . $Last_name . "' , '" . $Name . "' , '" . $Middle_name . "' , '" . $Document . "' , '" . $N_document . "' , '" . $Address ."')";
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

			<form action='insert7.html'>
		        <tr align="center">
		            <td><input type='submit' class="b1" value='Back to the add'></td>
	        </form>
	    	<form action='menut7.html'>
		        <tr>
		            <td><input type='submit' class="b1" value='Back to menu'></td>
		        </tr> 
			</form>
		</table>
	</body>
</html> 