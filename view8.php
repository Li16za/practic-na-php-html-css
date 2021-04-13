<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Resolution</title>
	</head>
	<body bgcolor="MidnightBlue">
		<table align="center" bgcolor="RoyalBlue" id="dtMaterialDesignExample" class="table" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th ALIGN=CENTER> Id_resolution </th>
					<th ALIGN=CENTER> Id_officer </th>
					<th ALIGN=CENTER> Date_resolution </th>
					<th ALIGN=CENTER> Conclution </th>
				</tr>
			</thead>
			<tbody>
			<?php
				//подключение бд сервера
				$conn = mysqli_connect("localhost", "liza", "Password01!","praktika");
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				// запрос
				$sql = "SELECT * FROM Resolution";
				//проверка строк
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					// вывод данных в $row[название столбцов]
					while($row = $result->fetch_assoc()) {
						echo "<tr ALIGN=CENTER><td>" . $row["Id_resolution"]
						. "</td><td>" . $row["Id_officer"]
						. "</td><td>" . $row["Date_resolution"]
						. "</td><td>" . $row["Conclution"]
						. "</td></tr>";
					}
					echo "</tbody>";
				} 
				else { 
					echo "0 results"; 
				}
				$conn->close();
			?>
	    <table align="center">
			<form action='menut8.html'>
		        <tr align="center">
		            <td><input type='submit' class="b1" value='Back'></td>
		        </tr>
	        </form>
	    </table>
	</body>
</html>