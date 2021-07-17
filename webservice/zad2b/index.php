<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Paweł Tuzinowski zad. 2B</title>
	</head>
	<body>
		<?php
			session_start();
			if(!isset($_SESSION["admin"])) {
				header('Location: ../../index.php');
			}
		?>
		<h1><center>Paweł Tuzinowski zad. 2B</center></h1>
		
		<table width="100%">
			<tr>
				<td><figure><img src="bridge.jpg" alt="Red Bridge" title="Red Bridge" style="max-width: 100%; max-height: 500px"><figcaption>Red Bridge</figcaption></figure></td>
				<td><figure><img src="teatrchicago.jpg" alt="Chicago Theatre" title="Chicago Theatre" style="max-width: 100%; max-height: 500px"><figcaption>Chicago Theatre</figcaption></figure></td>
				<td><figure><img src="campitellodifassa.jpg" alt="Campitello di Fassa" title="Campitello di Fassa" style="max-width: 100%; max-height: 500px"><figcaption>Campitello di Fassa</figcaption></figure></td>
			</tr>
			<tr>
				<td><figure><img src="wiezowiec.jpg" alt="skyscraper" title="skyscraper" style="max-width: 100%; max-height: 500px"><figcaption>skyscraper</figcaption></figure></td>
				<td><figure><img src="city.jpg" alt="city afar off" title="city afar off" style="max-width: 100%; max-height: 500px"><figcaption>city afar off</figcaption></figure></td>
				<td><figure><img src="wieza.jpg" alt="tower" title="tower" style="max-width: 100%; max-height: 500px"><figcaption>tower</figcaption></figure></td>
			</tr>
			<tr>
				<td><figure><img src="sanfrancisco.jpg" alt="San Francisco" title="San Francisco" style="max-width: 100%; max-height: 500px"><figcaption>San Francisco</figcaption></figure></td>
				<td><figure><img src="machupicchu.jpg" alt="Machu Picchu" title="Machu Picchu" style="max-width: 100%; max-height: 500px"><figcaption>Machu Picchu</figcaption></figure></td>
				<td><figure><img src="kolej.jpg" alt="rail" title="rail" style="max-width: 100%; max-height: 500px"><figcaption>rail</figcaption></figure></td>
			</tr>
			<tr>
				<td><figure><img src="budynki.jpg" alt="interesting buildings" title="interesting buildings" style="max-width: 100%; max-height: 500px"><figcaption>interesting buildings</figcaption></figure></td>
				<td><figure><img src="empirestate.jpg" alt="Empire State" title="Empire State" style="max-width: 100%; max-height: 500px"><figcaption>Empire State</figcaption></figure></td>
				<td><figure><img src="chicago2.jpg" alt="Chicago" title="Chicago" style="max-width: 100%; max-height: 500px"><figcaption>Chicago</figcaption></figure></td>
			</tr>
		</table>
		
		<br><br><br><p><a href="../index.php">Powrót do strony głównej.</a></p>
	</body>
</html>