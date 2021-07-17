<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Paweł Tuzinowski zad. 9</title>
		<link rel="stylesheet" href="calcstyle.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="calcscript.js"></script>
	</head>
	<body>
	
		<?php
			session_start();
			if(!isset($_SESSION["admin"])) {
				header('Location: ../../index.php');
			}
		?>
		
		<div class="clickme">
			<div class="bar">Calc<br><br><br>Click<br>me!</div>
		</div>
		
	
		<h1>Calculator</h1>
		<form class="calc">
			<input id="result" class="resultField" type="text" placeholder="0" 
				   disabled="disabled" value="">
			
			<input class="resultField button" type="button" name="b7" value="7" 
				   onclick="Calc(this.value)">
			<input class="resultField button" type="button" name="b8" value="8"
				   onclick="Calc(this.value)">
			<input class="resultField button" type="button" name="b9" value="9"
				   onclick="Calc(this.value)">
			<input class="resultField button" type="button" name="bC" value="C"
				   onclick="Calc(this.value)">
			<input class="resultField button" type="button" name="b4" value="4"
				   onclick="Calc(this.value)">
			<input class="resultField button" type="button" name="b5" value="5"
				   onclick="Calc(this.value)">
			<input class="resultField button" type="button" name="b6" value="6"
				   onclick="Calc(this.value)">
			<input class="resultField button" type="button" name="div" value="÷"
				   onclick="Calc(this.value)">
			<input class="resultField button" type="button" name="b1" value="1"
				   onclick="Calc(this.value)">
			<input class="resultField button" type="button" name="b2" value="2"
				   onclick="Calc(this.value)">
			<input class="resultField button" type="button" name="b3" value="3"
				   onclick="Calc(this.value)">
			<input class="resultField button" type="button" name="mul" value="×"
				   onclick="Calc(this.value)">
			<input class="resultField button" type="button" name="b0" value="0"
				   onclick="Calc(this.value)">
			<input class="resultField button" type="button" name="bPoint" value="."
				   onclick="Calc(this.value)">
			<input class="resultField button" type="button" name="add" value="+"
				   onclick="Calc(this.value)">
			<input class="resultField button" type="button" name="sub" value="-"
				   onclick="Calc(this.value)">
			<input class="resultField button buttonEqual" type="button" name="equal" 
				   value="=" onclick="Calc(this.value)">
		</form>
		<br><br><br><p id="return"><a href="../index.php">Powrót do strony głównej.</a></p><br>
	</body>
</html>