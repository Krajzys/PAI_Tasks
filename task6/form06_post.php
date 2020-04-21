<?php session_start(); ?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</head>
	<body>
		<h1>Dodawanie nowego pracownika</h1>
		<form action="form06_redirect.php" method="POST">
			id_prac <input type="text" name="id_prac">
			nazwisko <input type="text" name="nazwisko">
			<input type="submit" value="Wstaw">
			<input type="reset" value="Wyczyść">
		</form>
		<?php
			if (isset($_SESSION["failure"]) && $_SESSION["failure"] == 1) {
				echo "Dodawanie nowego pracownika nie powiodło się!";
				$_SESSION["failure"] = 0;
			}
		?>
		<p><a href="form06_get.php">Przejdź do spisu pracowników</a></p>
	</body>
</html>
