<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Paweł Tuzinowski zad. 3C</title>
		<link rel="stylesheet" href="../style.css" type="text/css">
	</head>
	<body>
		<?php
			session_start();
			if(!isset($_SESSION["admin"])) {
				header('Location: ../../index.php');
			}
		?>
		<h1><center>Paweł Tuzinowski zad. 3C</center></h1>
		<h2 id="register-head">Rejestracja</h2><br><br>
		
		<div class="regform">
			<form action="" method="post">
                Imię:&emsp;<input type="text" name="imie"><br>
                Nazwisko:&emsp;<input type="text" name="nazwisko"><br>
                Ulica:&emsp;<input type="text" name="ulica"><br>
				Nr domu:&emsp;<input type="text" name="nr_domu"><br>
				Nr mieszkania:&emsp;<input type="text" name="mieszkanie"><br>
				Kod pocztowy:&emsp;<input type="text" name="poczta"><br>
				Miasto:&emsp;<input type="text" name="miasto"><br>
				Województwo:&emsp;<select name="woj">
					<option>dolnośląskie</option>
					<option>kujawsko-pomorskie</option>
					<option>lubelskie</option>
					<option>lubuskie</option>
					<option>łódzkie</option>
					<option>małopolskie</option>
					<option>mazowieckie</option>
					<option>opolskie</option>
					<option>podkarpackie</option>
					<option>podlaskie</option>
					<option>pomorskie</option>
					<option>śląskie</option>
					<option>świętokrzyskie</option>
					<option>warmińsko-mazurskie</option>
					<option>wielkopolskie</option>
					<option>zachodniopomorskie</option>
					</select><br>
				Prawo jazdy:<input type="checkbox" name="prawko"><br>
				Płeć:&emsp;&emsp;K<input type="radio" name="plec" value="k">&emsp;M<input type="radio" name="plec" value="m"><br>
				<textarea name="uwagi" rows="15" cols="40" placeholder="Wpisz uwagi..."></textarea><br>
				Telefon: <input type="text" name="tel" placeholder="+48 "><br>
				Data urodzenia: <input type="date" name="data"><br>
				Hasło: <input type="password" name="haslo"><br><br>
				<input type="button" name="p1" value="OK">
				<input type="reset" name="p2" value="Czyść">
				<input type="submit" name="p3" value="Wyślij">
			</form>
		</div>
		<br><br><br><p id="return"><a href="../index.php">Powrót do strony głównej.</a></p><br>
	</body>
</html>