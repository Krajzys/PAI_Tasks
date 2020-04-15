<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<title>PHP</title>
		<meta charset='utf-8'/>
	</head>
	<body>
		<?php
			if (isSet($_GET["utworzCookie"]))
			{
				$czas = $_GET["czas"];
				setcookie("nazwa", "tajne dane", time() + $czas, "/");
				echo "Cookie wygaśnie za $czas sekund.</br>";
				echo "Pomyślnie utworzono cookie</br>";
			}
		?>
		<p><a href="index.php">Wstecz</a></p>
	</body>
</html>