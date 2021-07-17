<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Paweł Tuzinowski zad. 3B</title>
		<link rel="stylesheet" href="../style.css" type="text/css">
	</head>
	<body>
		<?php
			session_start();
			if(!isset($_SESSION["admin"])) {
				header('Location: ../../index.php');
			}
		?>
		<h1>Paweł Tuzinowski zad. 3B</h1>
		
		<div id="gallery">
			<figure class="photo">
					<img src="bridge.jpg" alt="Red Bridge">
					<figcaption>Red Bridge</figcaption>
			</figure>
			
			<figure class="photo">
					<img src="teatrchicago.jpg" alt="Chicago Theatre">
					<figcaption>Chicago Theatre</figcaption>
			</figure>
			
			<figure class="photo">
					<img src="campitellodifassa.jpg" alt="Campitello di Fassa">
					<figcaption>Campitello di Fassa</figcaption>
			</figure>
			
			<figure class="photo">
					<img src="wiezowiec.jpg" alt="Skyscraper" title="skyscraper">
					<figcaption>Skyscraper</figcaption>
			</figure>
			
			<figure class="photo">
					<img src="city.jpg" alt="City afar off">
					<figcaption>City afar off</figcaption>
			</figure>
			
			<figure class="photo">
					<img src="wieza.jpg" alt="Tower">
					<figcaption>Tower</figcaption>
			</figure>
			
			<figure class="photo">
					<img src="sanfrancisco.jpg" alt="San Francisco">
					<figcaption>San Francisco</figcaption>
			</figure>
			
			<figure class="photo">
					<img src="machupicchu.jpg" alt="Machu Picchu">
					<figcaption>Machu Picchu</figcaption>
			</figure>
			
			<figure class="photo">
					<img src="kolej.jpg" alt="Rail">
					<figcaption>Rail</figcaption>
			</figure>
			
			<figure class="photo">
					<img src="budynki.jpg" alt="Some interesting buildings">
					<figcaption>Some interesting buildings</figcaption>
			</figure>
			
			<figure class="photo">
					<img src="empirestate.jpg" alt="Empire State">
					<figcaption>Empire State</figcaption>
			</figure>
			
			<figure class="photo">
					<img src="chicago2.jpg" alt="Chicago">
					<figcaption>Chicago</figcaption>
			</figure>
		</div>
		
		
		<br><br><br><p id="return"><a href="../index.php">Powrót do strony głównej.</a></p><br>
	</body>
</html>