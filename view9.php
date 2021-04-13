<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Уголовное дело</title>
	</head>
	<body bgcolor="MidnightBlue">
		<table align="center" bgcolor="RoyalBlue" id="dtMaterialDesignExample" class="table" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th ALIGN=CENTER> Id_criminal_case </th>
					<th ALIGN=CENTER> Id_resolution </th>
					<th ALIGN=CENTER> Id_the_officer_leading_the_case </th>
					<th ALIGN=CENTER> Date_of_establishment_of_the_case </th>
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
				$sql = "SELECT * FROM Criminal_case";
				//проверка строк
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					// вывод данных в $row[название столбцов]
					while($row = $result->fetch_assoc()) {
						echo "<tr ALIGN=CENTER><td>" . $row["Id_criminal_case"]
						. "</td><td>" . $row["Id_resolution"]
						. "</td><td>" . $row["Id_the_officer_leading_the_case"]
						. "</td><td>" . $row["Date_of_establishment_of_the_case"]
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
			<form action='menut9.html'>
		        <tr align="center">
		            <td><input type='submit' class="b1" value='Back'></td>
		        </tr>
	        </form>
	    </table>
	</body>
</html>