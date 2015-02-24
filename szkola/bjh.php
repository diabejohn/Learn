<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Wszystko</title>
</head>
<body>
<a href="bjh.php"><button>Odśwież</button></a>
<h1>Wyświetlanie</h1>
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
<H1>Wprowadzanie</H1>
<form method="POST" >
	<table>
		<tr>
			<td>Imie</td>
			<td><input type="text" name="field_1"></td>
		</tr>
		<tr>
			<td>Nazwisko</td>
			<td><input type="text" name="field_2"></td>
		</tr>
		<tr>
			<td><input type="submit" ></td>
		</tr>
	</table>
	</form>
	<?php 
		if(isset($_POST['field_1']) && isset($_POST['field_2'])){
			$name = $_POST['field_1'];
			$last_name = $_POST['field_2'];
			mysql_query("INSERT INTO klasa VALUES(0,'$name','$last_name')"); 
			echo "Zapisano";
			unset($_POST);
		}

	?>
<h1>Usuwanie</h1>
<?php
		echo "Wybrałeś $opcja </br>";
		echo "$argument";
		mysql_query("DELETE from klasa WHERE $opcja like '$argument'");

		?>
	<form method="POST">
		<table>		
					<tr>
					<td>
						Argument:
					</td>
					<td colspan="2">
						<input type="text" name="argument">
					</td>
					</tr>
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
				
			</table>
	</form>
	 
<h1>Wyszukiwanie</h1>
	<form method="POST" action="wynik.php">
		<table>		
					<tr>
					<td>
						Argument:
					</td>
					<td colspan="2">
						<input type="text" name="argumentw">
					</td>
					</tr>
					 <tr>
		 				<td colspan="2">
						<select name="opcjaw">
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
						<input type="submit" value="Wyszukaj">
					</td>
				</tr>
				
			</table>
	</form>
	<h1>Chcesz zmienić....</h1>
	<form method="POST">
	<table border="1">
		<tr>
			<td>ID</td>
			<td><input type="text" name="idz" ></td>
		</tr>
		<tr>
			<td>Imie</td>
			<td><input type="text" name="imiez" ></td>
		</tr>
		<tr>
			<td>Nazwisko</td>
			<td><input type="text" name="nazwiskoz" ></td>
		</tr>
		<tr>
			<td colspan="2">
				<center><input type="submit" onclick="<?php mysql_query("UPDATE klasa SET imie='$imiez', nazwisko='$nazwiskoz' WHERE id like '$idz'");?>"></center>
			</td>
		</tr>
	</table>
	</form>
	

</body>
</html>