<?php session_start(); ?>
<?php
	require("funkcje.php");
	
	if (isSet($_POST["zaloguj"])) 
	{
		$ulogin = test_input($_POST["login"]);
		$upassword = test_input($_POST["haslo"]);
		if ($ulogin == $osoba1->login && $upassword == $osoba1->haslo)
		{
			$_SESSION["zalogowanyImie"] = $osoba1->imieNazwisko;
			$_SESSION["zalogowany"] = 1;
			echo "hello adam";
			header("Location: user.php");
		}
		else if ($ulogin == $osoba2->login && $upassword == $osoba2->haslo)
		{
			$_SESSION["zalogowanyImie"] = $osoba2->imieNazwisko;
			$_SESSION["zalogowany"] = 1;
			echo "hello agata";
			header("Location: user.php");
		}
		else
		{
			$_SESSION["zalogowanyImie"] = "";
			$_SESSION["zalogowany"] = 0;
			echo "hello noone";
			header("Location: index.php");
		}
		//echo "Przesłany login: $ulogin </br>";
		//echo "Przesłane hasło: $upassword </br>";
	}
?>