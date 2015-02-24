<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
				<tr>
					<td>ID</td>
					<td>Imie</td>
					<td>Nazwisko</td>
				</tr>
				<?php  
						$db = mysql_connect("127.0.0.1","uczen","klasa4");
						mysql_select_db("technikum");

						$result = mysql_query("SELECT * from klasa WHERE $opcjaw like '$argumentw'");
						while ($row = mysql_fetch_assoc($result)) {
						echo "<tr>";
					    echo "<td>".$row["id"]."</td>";
					    echo "<td>".$row["imie"]."</td>";
					    echo "<td>".$row["nazwisko"]."</td>";
					    echo "</tr>";
					} ?>
			</table>


</body>
</html>
