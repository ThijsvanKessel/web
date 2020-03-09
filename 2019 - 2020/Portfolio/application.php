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
        <h1 class="display-4">Application Programming</h1>
        <p class="lead">Here you can see the projects that I made for application programming.<br>
        They are made using: C#.</p><br>
        <a> click <a href="https://github.com/ThijsvanKessel/application">here</a> to go to the github for the code.</a>
        </div>
        </div>
     

    <div class="container">
      <div class="row">

      <div class="col-md-4">
        <div class="card">
          <img src="img/DragRace.PNG" class="card-img-top" height="195">
          <div class="card-body">
            <h5 class="card-title">Drag Race</h5>
            <p class="card-text">A program that races with random values.</p><br>
            <a href="dragrace.php" class="btn btn-primary">To the project</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="img/CalculatorC.PNG" class="card-img-top" height="195">
          <div class="card-body">
            <h5 class="card-title">Calculator</h5>
            <p class="card-text">A calculator that is easy to use.</p><br>
            <a href="calculator.php" class="btn btn-primary">To the project</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="img/ColorStepper.PNG" class="card-img-top" height="195">
          <div class="card-body">
            <h5 class="card-title">Color Stepper</h5>
            <p class="card-text">A program to cycle colors</p><br>
            <a href="colorstepper.php" class="btn btn-primary">To the project</a>
          </div>
        </div>
      </div>
     </div>
<div class="row">
<div class="col-md-4"><br>
        <div class="card">
          <img src="img/Mystery Number.PNG" class="card-img-top" height="195">
          <div class="card-body">
            <h5 class="card-title">Mystery Number</h5>
            <p class="card-text">A game where you need to guess the random generated number.</p>
            <a href="mysterynumber.php" class="btn btn-primary">To the project</a>
          </div>
        </div>
      </div>

      <div class="col-md-4"><br>
        <div class="card">
          <img src="img/VaultC.PNG" class="card-img-top" height="195">
          <div class="card-body">
            <h5 class="card-title">Vault</h5>
            <p class="card-text">A program that demonstrates the function of a vault.</p>
            <a href="vault.php" class="btn btn-primary">To the project</a>
          </div>
        </div>
        <br><br><br>
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