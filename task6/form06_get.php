<?php session_start(); ?>
<!doctype html>
<html>
<head>
</head>
<body>
<h1>Spis pracowników</h1>
<?php
	$link = mysqli_connect("localhost", "scott", "tiger", "instytut");
	
	if (!$link) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
	$sql = "SELECT * FROM pracownicy";
	$result = $link->query($sql);
	echo "<table>";
	echo "<tr><th>[ ID ]</th><th>[ Nazwisko ]</th></tr>";
	foreach ($result as $v) {
		echo "<tr><td>".$v["ID_PRAC"]."</td><td>".$v["NAZWISKO"]."</td></tr>";
	}
	echo "</table>";
	$result->free();
	
	$link->close();
?>
<?php if (isset($_SESSION["succes"]) && $_SESSION["succes"] == 1): ?>
		<p>Dodawanie pracownika zakończone powodzeniem!<p>
<?php endif; $_SESSION["succes"] = 0;?>
<p><a href="form06_post.php">Dodaj nowego pracownika</a></p>
</body>
</html>