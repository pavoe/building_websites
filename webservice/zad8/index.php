<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Paweł Tuzinowski zad. 8</title>
		<link rel="stylesheet" href="style.css" type="text/css">
	</head>
	<body>
		<?php
			session_start();
			if(!isset($_SESSION["admin"])) {
				header('Location: ../../index.php');
			}
		?>
		<h1><center>Paweł Tuzinowski zad. 8</center></h1>
		<h2 id="register-head">Zarządzanie tabelą</h2><br><br>
		
		<?php
			//łączenie z bazą
			$connection = @mysql_connect('sql200.epizy.com','epiz_28083189','oddxRRgTtRb8Ho');
			$db = @mysql_select_db('epiz_28083189_guests',$connection);
			
			//wyświetlanie
			$sql = "SELECT * FROM guests";
			$wynik = mysql_query($sql);
			echo "<div><form action='' method='get'>";
			while($linia = mysql_fetch_array($wynik)) {
				echo "<hr>";
				echo $linia['id']."   ".$linia['Imie']."   ".$linia['Nazwisko']."   ".$linia['Wiek'];
				//echo "<input id='button_table' type='button' name='Edytuj' value='Edytuj' onclick='?action=edit'>";
				//echo "<input id='button_table2' type='button' name='Usun' value='Usuń' onclick='?action=delete'>";
				echo "<input id='button_table' type='button' name='Edytuj' value='Edytuj'>";
				echo "<input id='button_table2' type='button' name='Usun' value='Usuń'>";
			}
			echo "</form></div>";
		?>
		
		<?php
			mysql_close($connection);
		?>
		
		<div class="empty_row">
			<form action="addToGuests.php" method="get">
				Imię:<input class="row_field" type="text" name="imie">&emsp;
				Nazwisko:<input class="row_field" type="text" name="nazwisko">&emsp;
				Wiek:<input class="row_field" type="text" name="wiek">&emsp;
				<input type="submit" name="wyslij" value="Dodaj">
			</form>
		</div>
		
		
		<br><br><br><p id="return"><a href="../index.php">Powrót do strony głównej.</a></p><br>
	</body>
</html>