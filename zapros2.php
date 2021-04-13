<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="style.css">
<title></title>
</head>
<body bgcolor="MidnightBlue">
<table align="center" bgcolor="RoyalBlue" id="dtMaterialDesignExample" class="table" cellspacing="0" width="100%">
<thead>
<tr>
<th ALIGN=CENTER>Код проишествия
</th>
<th ALIGN=CENTER>Дата происшествия
</th>
<th ALIGN=CENTER>Прошло дней
</th>
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
// запрос zadaniya
$sql = " SELECT Id_incident,Date_incident, DATEDIFF( CURRENT_DATE() , Date_incident ) as Day_later FROM `Incident` ";
//проверка строк
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// вывод данных в $row[название столбцов]
while($row = $result->fetch_assoc()) {
echo "<tr ALIGN=CENTER><td>" . $row["Id_incident"]
. "</td><td>" . $row["Date_incident"]
. "</td><td>" . $row["Day_later"]
. "</td></tr>";
}
echo "</tbody>";

} else { echo "0 results"; }
$conn->close();
?>
	<table align="center">
			<form action='menugl2.html'>
		        <tr align="center">
		            <td><input type='submit' class="b1" value='Назад'></td>
		        </tr>
	        </form>
	    </table>
</body>
</html> 