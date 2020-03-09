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
        <h1 class="display-4">Embedded Systems</h1>
        <p class="lead">Here you can see the projects that I made for Embedded Systems.<br>
        They are made using: C#.</p><br>
        <a> click <a href="https://github.com/ThijsvanKessel/embedded">here</a> to go to the github for the code.</a>
        </div>
        </div>
     

    <div class="container">
      <div class="row">

      <div class="col-md-4">
        <div class="card">
          <img src="img/ledmatrix.png" class="card-img-top" height="195">
          <div class="card-body">
            <h5 class="card-title">LED Matrix</h5>
            <p class="card-text">An eight by eight led screen that displays your name.</p><br>
            <a href="matrix.php" class="btn btn-primary">To the project</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="img/Fietslamp.PNG" class="card-img-top" height="195">
          <div class="card-body">
            <h5 class="card-title">Bike Light</h5>
            <p class="card-text">A program that makes the lights light up in different patterns.</p><br>
            <a href="bike.php" class="btn btn-primary">To the project</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="img/Vault2.PNG" class="card-img-top" height="195">
          <div class="card-body">
            <h5 class="card-title">Vault</h5>
            <p class="card-text">program that uses input from buttons to check if the code is right.</p><br>
            <a href="vault2.php" class="btn btn-primary">To the project</a>
          </div>
        </div>
      </div>
      <br><br><br><br><br>
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