<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../style.css" type="text/css">
</head>
<body>

	<?php
		if(isset($_GET["imie"])) {
			$imie = $_GET["imie"];
		}
		if(isset($_GET["nazwisko"])) {
			$nazwisko = $_GET["nazwisko"];
		}
		if(isset($_GET["ulica"])) {
			$ulica = $_GET["ulica"];
		}
		if(isset($_GET["nr_domu"])) {
			$nr_domu = $_GET["nr_domu"];
		}
		if(isset($_GET["mieszkanie"])) {
			$mieszkanie = $_GET["mieszkanie"];
		}
		if(isset($_GET["poczta"])) {
			$poczta = $_GET["poczta"];
		}
		if(isset($_GET["miasto"])) {
			$miasto = $_GET["miasto"];
		}
		if(isset($_GET["woj"])) {
			$woj = $_GET["woj"];
		}
		if(isset($_GET["prawko"])) {
			$prawko = $_GET["prawko"];
		}
		if(isset($_GET["plec"])) {
			$plec = $_GET["plec"];
		}
		if(isset($_GET["uwagi"])) {
			$uwagi = $_GET["uwagi"];
		}
		if(isset($_GET["tel"])) {
			$tel = $_GET["tel"];
		}
		if(isset($_GET["data"])) {
			$data = $_GET["data"];
		}
		if(isset($_GET["haslo"])) {
			$haslo = $_GET["haslo"];
		}
	?>
	
<h1>Imię: &nbsp <?php echo($imie) ?></h1>
<h1>Nazwisko: &nbsp <?php echo($nazwisko) ?></h1>
<h1>Ulica: &nbsp <?php echo($ulica) ?></h1>
<h1>Nr domu: &nbsp <?php echo($nr_domu) ?></h1>
<h1>Mieszkanie: &nbsp <?php echo($mieszkanie) ?></h1>
<h1>Poczta: &nbsp <?php echo($poczta) ?></h1>
<h1>Miasto: &nbsp <?php echo($miasto) ?></h1>
<h1>Województwo: &nbsp <?php echo($woj) ?></h1>
<h1>Prawo jazdy: &nbsp <?php echo($prawko) ?></h1>
<h1>Płeć: &nbsp <?php echo($plec) ?></h1>
<h1>Uwagi: &nbsp <?php echo($uwagi) ?></h1>
<h1>Nr telefonu: &nbsp <?php echo($tel) ?></h1>
<h1>Data urodzenia: &nbsp <?php echo($data) ?></h1>
<h1>Hasło: &nbsp <?php echo($haslo) ?></h1>

	
<br><br><br><p id="return"><a href="../index.php">Powrót do strony głównej.</a></p><br>
</body>
</html>