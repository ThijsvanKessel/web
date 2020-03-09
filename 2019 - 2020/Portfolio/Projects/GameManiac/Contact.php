<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Game Maniac">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<link rel="stylesheet" type="text/css" href="css/mainnav.css">
	<script type="text/javascript" scr="js/Background.js"> </script>
	
	<title>Game Maniac</title>
</head>
	<body>
		<?php
			include("inc/Header.php");
			Headertest();
		?>
	<br>
	<div id=contactfolder>
	
    <form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    Your name:<br>
    <input name="name" type="text" value="" placeholder="Put here your Name" /><br>
    Your email:<br>
    <input name="email" type="text" value="" placeholder="Put here your Email" /><br>
    Your message:<br>
    <textarea name="message" rows="7" cols="30" placeholder="Type here your text message"></textarea><br>
    <input type="submit" value="Send email"/>
    </form>
	</div>
	<Br>
		<?php
			include("inc/Foeter.php");
			Footer2();
		?>
	</body>
</html>