<?php 
	#Скрипт обработки загружаемых данных.
	/* Определяем значения переменным */ 
		$status = $_POST['stolbec1'];//имя пользователя
		$conn = mysqli_connect("localhost", "liza", "Password01!","praktika");
	// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		if($status=='') {
	    	$vivod =  "The entry was not added to the database! Check that the fields are filled in correctly. "; //поднимает флаг в случае ошибки
		}
		else {
			$sql = "INSERT INTO `Status_of_the_involved`( `status`) VALUES ('" .  $status . "')";
			$result = $conn->query($sql);
	    	$vivod = "The entry is entered in the database!"; 
	    } 	 
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Insert into Status_of_the_involved</title>
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

			<form action='insert6.html'>
		        <tr align="center">
		            <td><input type='submit' class="b1" value='Back to the add'></td>
	        </form>
	    	<form action='menut6.html'>
		        <tr>
		            <td><input type='submit' class="b1" value='Back to menu'></td>
		        </tr> 
			</form>
		</table>
	</body>
</html>