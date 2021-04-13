<?php 
	#Скрипт обработки загружаемых данных.
	/* Определяем значения переменным */
	$ID = $_POST['stolbec1']; 
	$name = $_POST['stolbec2'];
	$izmen = $_POST['stolbec3'];
	$conn = mysqli_connect("localhost", "liza", "Password01!","praktika");
	// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		if($izmen=='') {
	    	$vivod =  "The record is not changed in the database! Check that the fields are filled in correctly";
		}
		else {
			$sql = "UPDATE Officer SET " . $name . "  = '" . $izmen  . "' WHERE Id_officer = '" .$ID . "'";
		$result = $conn->query($sql);
	    	$vivod = "Record changed in the database! "; 
	    } 	 
?>
<!DOCTYPE html>
<html>
	<head>
	    <link rel="stylesheet" type="text/css" href="style.css">
		<title>Update</title>
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

			<form action='update2.html'>
		        <tr align="center">
		            <td><input type='submit' class="b1" value='Back to change'></td>
	        </form>
	    	<form action='menut2.html'>
		        <tr>
		            <td><input type='submit' class="b1" value='Back to menu'></td>
		        </tr> 
			</form>
		</table>
	</body>
</html>
