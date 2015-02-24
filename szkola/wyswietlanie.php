<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Wyświetlanie tabel</title>
</head>
<body>
<h1>Wyświetlanie</h1>
<?php 
$db = mysql_connect("127.0.0.1","uczen","klasa4");
mysql_select_db("technikum");
$result = mysql_query("SELECT * from klasa");
 ?>
	<form method="POST" action="usuwanie.php">
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

				<tr>
					<td colspan="2">
						<select name="opcja">
							<option value="id">
								ID
							</option>
							<option value="imie">
								Imie
							</option>
							<option value="nazwisko">
								Nazwisko
							</option>
						</select>
					</td>
					<td>
						<input type="submit" value="Kasuj">
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<input type="text" name="argument">
					</td>
				</tr>
			</table>
	</form>
	

</body>
</html>