<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

	<?php
		$connection = @mysql_connect('sql200.epizy.com','epiz_28083189','oddxRRgTtRb8Ho');
		$db = @mysql_select_db('epiz_28083189_guests',$connection);
		$imie = $_GET["imie"];
		$nazwisko = $_GET["nazwisko"];
		$wiek = $_GET["wiek"];
		$sql = "insert into guests(Imie, Nazwisko, Wiek) values('$imie', '$nazwisko', '$wiek')";
		$a = mysql_query($sql);
		mysql_close($connection);
		header('Location: index.php');
	?>
	
</body>
</html>