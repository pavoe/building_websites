<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Paweł Tuzinowski zad. 2C</title>
	</head>
	<body>
		<?php
			session_start();
			if(!isset($_SESSION["admin"])) {
				header('Location: ../../index.php');
			}
		?>
		<h1><center>Paweł Tuzinowski zad. 2C</center></h1>
		<h2>Register site<br>Please fulfill the form.</h2><br><br>
		
		<form action="" method="post">
			Imię: <input type="text" name="imie"><br>
			Nazwisko: <input type="text" name="nazwisko"><br>
			Ulica: <input type="text" name="ulica"><br>
			Nr domu: <input type="text" name="nr_domu"><br>
			Nr mieszkania: <input type="text" name="mieszkanie"><br>
			Kod pocztowy: <input type="text" name="poczta"><br>
			Miasto: <input type="text" name="miasto"><br>
			Województwo: <select name="woj">
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
			Prawo jazdy: <input type="checkbox" name="prawko"><br>
			Płeć: K <input type="radio" name="plec" value="k"> M <input type="radio" name="plec" value="m"><br>
			<textarea name="uwagi" rows="15" cols="40">Wpisz uwagi...</textarea><br>
			Telefon: <input type="text" name="tel"><br>
			Data urodzenia: <input type="date" name="data"><br>
			Hasło: <input type="password" name="haslo"><br>
			<input type="button" name="p1" value="OK">
			<input type="reset" name="p2" value="Czyść">
			<input type="submit" name="p3" value="Wyślij">
		</form>
		
		<br><br><br><p><a href="../index.php">Powrót do strony głównej.</a></p>
	</body>
</html>