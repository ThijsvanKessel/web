<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Game Maniac">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/mainnav.css">
	<title>Game Maniac</title>
</head>
<body>
<?php
			include("inc/Header.php");
			Headertest();
		?>
		<div id="containerIndex">
			<div id="welcome">
					  	<div id="text">
					  	<br>
					  		<h1>Welcome to Game Maniac</h1>
					  		<br>
					  		<h3>The number one in games</h3>
					  	</div>
			</div>
			<div id="cat-box">
				<a href="Shop.php?catId=1"><img class="games" src="img/Xbox.jpg"></a><!-- to select a album by picture-->
				<a href="Shop.php?catId=2"><img class="games" src="img/Ps.jpg"></a>
   				<a href="Shop.php?catId=3"><img class="games" src="img/Microsoft.jpg"></a>
			</div>
		</div>
		<?php
					include("inc/Foeter.php");
					Footer2();
				?>

	</body>
</html>