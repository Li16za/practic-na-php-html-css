<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Involved</title>
	</head>
	<body bgcolor="MidnightBlue">
		<table align="center" bgcolor="RoyalBlue" id="dtMaterialDesignExample" class="table" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th ALIGN=CENTER> Id_involved </th>
					<th ALIGN=CENTER> Id_status </th>
					<th ALIGN=CENTER> Id_incident </th>
					<th ALIGN=CENTER> Id_a_criminal_record </th>
					<th ALIGN=CENTER> Last_name </th>
					<th ALIGN=CENTER> Name </th>
					<th ALIGN=CENTER> Middle_name </th>
					<th ALIGN=CENTER> Document </th>
					<th ALIGN=CENTER> N_document </th>
					<th ALIGN=CENTER> Address </th>
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
				$sql = "SELECT * FROM Involved";
				//проверка строк
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					// вывод данных в $row[название столбцов]
					while($row = $result->fetch_assoc()) {
						echo "<tr ALIGN=CENTER><td>" . $row["Id_involved"]
						. "</td><td>" . $row["Id_status"]
						. "</td><td>" . $row["Id_incident"]
						. "</td><td>" . $row["Id_a_criminal_record"]
						. "</td><td>" . $row["Last_name"]
						. "</td><td>" . $row["Name"]
						. "</td><td>" . $row["Middle_name"]
						. "</td><td>" . $row["Document"]
						. "</td><td>" . $row["N_document"]
						. "</td><td>" . $row["Address"]
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
			<form action='menut7.html'>
		        <tr align="center">
		            <td><input type='submit' class="b1" value='Back'></td>
		        </tr>
	        </form>
	    </table>
	</body>
</html>