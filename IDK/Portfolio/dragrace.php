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
        <h1 class="display-4">Drag Race</h1>
        <p class="lead">The project works by getting four random values and giving them to each racer. the random value will determine the speed of the car.
        after starting the race, a timer will start for each car. This makes it possible to see the time of every car at the end of the race.</p>
        <div class="Image">
        <img src="img/DragRace.PNG" width="90%">
        </div>
        <a> click <a href="https://github.com/ThijsvanKessel/application/tree/master/DragRaceTkes">here</a> to go to the github for the code.</a>
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