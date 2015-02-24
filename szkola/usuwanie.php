<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Usuwanie tabel</title>
</head>
<body>
<h1>Usuwanie</h1>
<?php 
$db = mysql_connect("127.0.0.1","uczen","klasa4");
mysql_select_db("technikum");

	if ($opcja == 'imie') {
			echo "Wybrałeś imie </br>";
			echo "$argument";
			mysql_query("DELETE from klasa WHERE $opcja like '$argument'");
		} else if ($opcja == 'id') {
			echo "Wybrałeś id </br>";
			echo "$argument";
			mysql_query("DELETE from klasa WHERE $opcja=$argument");
		} else 	if ($opcja == 'nazwisko') {
			echo "Wybrałeś nazwisko </br>";
			echo "$argument";
			mysql_query("DELETE from klasa WHERE $opcja like '$argument'");
		}
		 
	 ?>

</body>
</html>