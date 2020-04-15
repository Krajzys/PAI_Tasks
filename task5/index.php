<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<title>PHP</title>
		<meta charset='utf-8'/>
	</head>
	<body>
		<?php
			require("funkcje.php");
			
			echo "<h1>Nasz system</h1>";
			
			if (isSet($_POST["wyloguj"]))
			{
				$_SESSION["zalogowany"] = 0;
			}
		?>
		<p><a href="user.php">Przejdź do strony użytkownika</a></p>
		
		<form action="logowanie.php" method="post">
			<fieldset>
				<legend>Logowanie</legend>
				<label for="login">Login:</label>
				<input type="text" name="login" id="login"></br></br>
				<label for="haslo">Hasło:</label>
				<input type="password" name="haslo" id="haslo"></br></br>
				<input type="submit" name="zaloguj" value="Zaloguj">
			</fieldset>
		</form>
		
		</br></br>
		
		<form action="cookie.php" method="get">
			<fieldset>
				<legend>Tworzenie cookie</legend>
				<label for="czas">Czas życia cookie:</label>
				<input type="number" name="czas" id="czas">
				<input type="submit" name="utworzCookie" value="Stwórz cookie">
				<?php
					if (isSet($_COOKIE["nazwa"]))
					{
						echo "</br></br>Zawartość pliku cookie: " . $_COOKIE["nazwa"];
					}
				?>
			</fieldset>
		</form>
	</body>
</html>