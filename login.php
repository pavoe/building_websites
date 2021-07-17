<!DOCTYPE html>
<html>
<body>

	<?php
	
		session_start();
		
		$login = "jakis_login";
		if(isset($_GET["login"])) {
			$login = $_GET["login"];
		}
		$haslo = "jakies_haslo";
		if(isset($_GET["haslo"])) {
			$haslo = $_GET["haslo"];
		}
		if($login=="admin" && $haslo=="admin") {
			$_SESSION["admin"] = 1;
			header('Location: webservice/index.php');
		}
		else {
			header('Location: index.php');
		}
		
	?>
<h1>Hello <?php echo($login) ?></h1>
	

</body>
</html>