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

<div id="Carousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-50 center" src="img/Vault.PNG">
    </div>
    <div class="carousel-item">
      <img class="d-block w-50 center" src="img/DragRace.PNG">
    </div>
    <div class="carousel-item">
      <img class="d-block w-50 center" src="img/Fietslamp.PNG">
    </div>
  </div>
</div>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 Colomn">Welcome to my website. This is an example of what I have learned at school.
             I do a bilingual media- and application education. The education consists of three years of which one is almost done.
              After this schoolyear I am going on an internship. For my internship I will go to Malta.
               During my education I have learned how to make websites using html, CSS, JavaScript and php. Besides making websites, I can do a lot more.
                For example, I can make a computer program using C#, control an Arduino using C++ and make and use a database with SQL.
                 To show you that I am proficient with those languages I have received certificates for completing courses on SoloLearn. 
                 <br><br><br><br><br><br><br><br><br>
                 <a href="inc/HTML.pdf" download class="btn btn-primary">HTML Certificate</a>
                 <a href="inc/SQL.pdf" download class="btn btn-primary">SQL Certificate</a>
                 <a href="inc/ITE.pdf" download class="btn btn-primary">ITE Certificate</a>

            </div>
            <div class="col-md-4 Colomn"><img src="img/Thijs.jpg" class="card-img-top"></div>
        </div>
    </div>
    <br><br><br><br>
    <div class="container">
      <div class="row">

      <div class="col-md-4 Calculator++">
        <div class="card">
          <img src="img/Calculator.png" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Calculator++</h5>
            <p class="card-text">A calculator made for web development.</p><br>
            <a href="Projects/Calculator++/index.php" class="btn btn-primary">To the project</a>
            <a href="web.php" class="btn btn-primary">More html projects</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="img/DragRace2.PNG" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Drag Race</h5>
            <p class="card-text">A program that races with random values.</p><br>
            <a href="dragrace.php" class="btn btn-primary">To the project</a>
            <a href="application.php" class="btn btn-primary">More C# projects</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="img/" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">.</h5>
            <p class="card-text">.</p>
            <a href="Projects/" class="btn btn-primary">To the project</a>
            <a href="application.php" class="btn btn-primary">More C# projects</a>
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