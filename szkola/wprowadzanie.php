<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>ÓĄ</title>
</head>
<body>
<?php  
	mysql_connect("127.0.0.1","uczen","klasa4");
	mysql_select_db("technikum");
?>
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
			<td><input type="reset" ></td>
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
		}

	?>
</body>
</html>