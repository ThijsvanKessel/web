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
        <h1 class="display-4">Web Development</h1>
        <p class="lead">Here you can see the projects that I needed to make for web development.<br>
        They are made using: html, php, css, javascript & sql.</p>
        <a> click <a href="https://github.com/ThijsvanKessel/web">here</a> to go to the github for the code.</a>
        </div>
        </div>
     

    <div class="container">
      <div class="row">

      <div class="col-md-4 Calculator++">
        <div class="card">
          <img src="img/Calculator.PNG" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Calculator++</h5>
            <p class="card-text">A calculator purely made with html.</p><br>
            <a href="Projects/Calculator++/index.php" class="btn btn-primary">To the project</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 RadioGaga">
        <div class="card">
          <img src="img/RadioGaga.PNG" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Radio Gaga</h5>
            <p class="card-text">A musical website that retreaves data from arrays.</p>
            <a href="Projects/RadioGaga/home.html" class="btn btn-primary">To the project</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 Gameworld">
        <div class="card">
          <img src="img/GameManiac.PNG" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Gameworld</h5>
            <p class="card-text">A game store that uses a lot of category ids</p><br>
            <a href="Projects/GameManiac/index.php" class="btn btn-primary">To the project</a>
          </div>
        </div>
      </div>
     </div>
<div class="row">
      <div class="col-md-4 Vault-JS"><br>
        <div class="card">
          <img src="img/Vault.PNG" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Vault-JS</h5>
            <p class="card-text">A vault that works by using javascript.</p><br>
            <a href="Projects/Vault/index.html" class="btn btn-primary">To the project</a>
          </div>
        </div>
      </div>

    <div class="col-md-4 MarvelHeroes"><br>
        <div class="card">
          <img src="img/Marvel.PNG" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Marvel Heroes</h5>
            <p class="card-text">A website that retreaves information about superheroes from a database.</p>
            <a href="Projects/Marvel Heroes/index.php" target="77h" class="btn btn-primary">To the project</a>
          </div>
        </div>
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