<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <!-- custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Portfolio</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/Logo.png">  <!--Favicon Code http://www.websonic.nl/tutorials/websitehtmlxhtml/html_favicon.php-->
  </head>

  <body>
  <?php
			include("inc/Header.php");
			HeaderThijs();
		?>
    <br><br>
    <div class="container">
      <div class="jumbotron">
        <h1 class="display-4">Colorstepper</h1>
        <p class="lead">When hitting the step button, the progressbar will increase by one and raise the step counter. according to the step counter a color will be displayed.
        When the counter hits three and you want to increase it, it will go back to one. By hitting the color buttons in the middle, the number will jump to the according color and display the color.</p>
        <div class="Image">
        <img src="img/ColorStepper.PNG" hight="50%"><br>
        </div>
        <a> click <a href="https://github.com/ThijsvanKessel/application/tree/master/ColorStepper">here</a> to go to the github for the code.</a>
        </div>
        </div>




<?php
			include("inc/Footer.php");
			FooterThijs();
		?>

  	  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>