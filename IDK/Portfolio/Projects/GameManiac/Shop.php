<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Game Maniac">
	<link rel="stylesheet" type="text/css" href="css/Shop.css">
	<link rel="stylesheet" type="text/css" href="css/mainnav.css">
	
	<title>Game Maniac</title>
<link rel="shortcut icon" href="img/urlImage.png">
</head>
	<body>
		<?php
			include("inc/Header.php");
			Headertest();


			require("inc/fromDataBase.php");
			games();

			include("inc/Foeter.php");
			Footer2();
		?>
	</body>
</html>