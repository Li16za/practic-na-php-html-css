<?php 
	#Скрипт для удаления данных. 
	$conn = mysqli_connect("localhost", "liza", "Password01!","praktika");
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	/* Удаление записи  */ 
	$ID = $_POST['ID'];
	if($ID != '') {
	    $qry = " SELECT * FROM Location WHERE Id_location =  " . $ID ; //запрос к MySQL
	}	       
	$result = $conn->query($qry);
	if ($result->num_rows > 0) {           
		$sql = "DELETE FROM Location WHERE Id_location = " . $ID ;
		$result=$conn->query($sql);
		$vivod = "The record is deleted"; 
	}
	else 
	{
	$vivod = "There are no lines with this code";	
	}
?>
 <!DOCTYPE html>
 <html>
 	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
 	<title>Delete</title>
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

			<form action='deletet3.html'>
		        <tr align="center">
		            <td><input type='submit' class="b1" value='Back to delete'></td>
	        </form>
	    	<form action='menut3.html'>
		        <tr>
		            <td><input type='submit' class="b1" value='Back to menu'></td>
		        </tr> 
			</form>
		</table>
	</body>
</html>
