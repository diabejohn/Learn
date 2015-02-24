<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Update</title>

</head>
<body>
<?php 
$db = mysql_connect("127.0.0.1","uczen","klasa4");
mysql_select_db("technikum");
$result = mysql_query("SELECT * from klasa");
 ?>
	<form method="POST">
			<table border="1">
				<tr>
					<td>ID</td>
					<td>Imie</td>
					<td>Nazwisko</td>
				</tr>
				<?php while ($row = mysql_fetch_assoc($result)) {
						echo "<tr>";
					    echo "<td>".$row["id"]."</td>";
					    echo "<td>".$row["imie"]."</td>";
					    echo "<td>".$row["nazwisko"]."</td>";
					    echo "</tr>";
					} ?>
			</table>

	</form>
	</br>
	</br>
	


</body>
</html>
