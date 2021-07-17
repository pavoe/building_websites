<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Paweł Tuzinowski</title>
		<link rel="stylesheet" href="style.css" type="text/css">
	</head>
	<body>
		<?php
			session_start();
			if(!isset($_SESSION["admin"])) {
				header('Location: ../index.php');
			}
		?>
	
		<h1>Autor: Paweł Tuzinowski</h1>
		<h2>Budowa serwisów internetowych</h2><br><br><br>
		
		<h3>Zadania nr 2: HTML</h3>
		<div>	
			<a href="zad2a/index.php" id="link">Zadanie 2A</a><br>
			<a href="zad2b/index.php" id="link">Zadanie 2B</a><br>
			<a href="zad2c/index.php" id="link">Zadanie 2C</a>
		</div>
		
		<h3>Zadania nr 3: HTML + CSS</h3>
		<div>	
			<a href="zad3a/index.php" id="link">Zadanie 3A</a><br>
			<a href="zad3b/index.php" id="link">Zadanie 3B</a><br>
			<a href="zad3c/index.php" id="link">Zadanie 3C</a>
		</div>
		
		<h3>Zadanie nr 4: HTML + CSS + JavaScript (calculator)</h3>
		<div>
			<a href="zad4/index.php" id="link">Zadanie 4</a>
		</div>
		
		<h3>Zadanie nr 5: HTML + CSS + JavaScript (registration with validation)</h3>
		<div>
			<a href="zad5/index.php" id="link">Zadanie 5</a>
		</div>
		
		<h3>Zadanie nr 6: XML + XSL (bill generator)</h3>
		<div>
			<a href="zad6/index.xml" id="link">Zadanie 6</a>
		</div>
		
		<h3>Zadanie nr 7: PHP (content of form)</h3>
		<div>
			<a href="zad7/index.php" id="link">Zadanie 7</a>
		</div>
		
		<h3>Zadanie nr 8: MySQL (table management)</h3>
		<div>
			<a href="zad8/index.php" id="link">Zadanie 8</a>
		</div>
		
		<h3>Zadanie nr 9: jQuery (calc presentation)</h3>
		<div>
			<a href="zad9/index.php" id="link">Zadanie 9</a>
		</div>
	</body>
</html>