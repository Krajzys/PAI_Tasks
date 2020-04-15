<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<title>PHP</title>
		<meta charset='utf-8'/>
	</head>
	<body>
		<?php
			if (!isSet($_SESSION["zalogowany"]) || $_SESSION["zalogowany"] == 0)
			{
				header("Location: index.php");
			}
			$zmienna = $_SESSION["zalogowanyImie"];
			echo $zmienna . "<br/>";
			require_once("funkcje.php");
			echo "Zalogowano";
			if (isSet($_POST["przeslij"]))
			{
				$currentDir = getcwd();
				$uploadDirectory = "/zdjeciaUzytkownikow/";
				$fileName = $_FILES["myfile"]["name"];
				$fileSize = $_FILES["myfile"]["size"];
				$fileTmpName = $_FILES["myfile"]["tmp_name"];
				$fileType = $_FILES["myfile"]["type"];
				if ($fileName != "" and
					($fileType == "image/png" or $fileType == "image/PNG"))
				{
					$uploadPath = $currentDir . $uploadDirectory . $fileName;
					if (move_uploaded_file($fileTmpName, $uploadPath))
						echo "</br>Zdjęcie zostało załadowane</br>";
				}
			}
		?>
		<p><a href="index.php">Wróć do strony głównej</a></p>
		<form action="user.php" method="post" enctype="multipart/form-data">
			<fieldset>
				<legend>Przesyłanie pliku</legend>
				<input type="submit" name="przeslij" value="Prześlij">
				<input name="myfile" type="file">
			</fieldset>
		</form>
		</br>
		<img src="./zdjeciaUzytkownikow/kotek.png" alt="Tutaj będzie twoje zdjęcie">
		</br>
		<form action="index.php" method="post">
			<input type="submit" name="wyloguj" value="Wyloguj">
		</form>
	</body>
</html>