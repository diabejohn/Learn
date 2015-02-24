<?php 
	echo "1.<br>";
	mysql_connect("127.0.0.1","uczen","klasa4");
	$zapytanie="CREATE DATABASE technikum";
	$wynik=mysql_query($zapytanie);
	if ($wynik) {
		echo 'Baza zostala utworzona';
	} else echo 'Bazy nie zostala utworzona lub juz jest';
	echo "<br><br>";

	echo "2.<br>";
	mysql_select_db("technikum");
	$wynik=mysql_query("CREATE TABLE klasa (
		id int(3) primary key auto_increment,
		imie char(10),
		nazwisko char(15) )"
							);
	if ($wynik) {
		echo 'Utworzono Tabele';
	} else echo 'Nie utworzono tabeli lub tabela o tej nazwie istnieje';
	echo "<br><br>";

	echo "3.<br>";
	$wynik=mysql_query("INSERT INTO klasa VALUES
		(0,'Jan','Kowalski')");
	if ($wynik) {
		echo 'Dodano rekord';
	} else echo 'Nie dodano';
	echo "<br><br>";


 ?>