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
    <!-- FontAwesome Icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Portfolio</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/Logo.png">  <!--Favicon Code http://www.websonic.nl/tutorials/websitehtmlxhtml/html_favicon.php-->
  </head>

  <body>
  <?php
			include("inc/Header.php");
			HeaderThijs();
		?>
    <br><br><br>
    <div class="container">
    <div class="jumbotron">
    <h2 class="h1-responsive font-weight-bold text-center my-4">Social media</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">These are platforms that i am active on.</p>

    <div class="container">
      <div class="row">

      <div class="col-md-4 Twitch">
        <div class="card">
          <div class="card-body text-center">
            <h5 class="card-title text-center">Twitch</h5>
            <img class="d-block w-50 center" src="img/Twitch.png">
            <br>
            <a href="https://www.twitch.tv/darkmyths/" target="_blank" class="btn btn-primary">To Twitch</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 YouTube">
        <div class="card">
          <div class="card-body text-center">
            <h5 class="card-title text-center">YouTube</h5>
            <img class="d-block w-50 center" src="img/YouTube.png">
            <br>
            <a href="//www.youtube.com/channel/UC3s2miVOxkabPLml0Dx2nnQ?" target="_blank" class="btn btn-primary">To YouTube</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 Instagram">
        <div class="card">
          <div class="card-body text-center">
            <h5 class="card-title text-center">Instagram</h5>
            <img class="d-block w-50 center" src="img/Instagram.png">
            <br>
            <a href="https://www.instagram.com/thijs_van_kessel/" target="_blank" class="btn btn-primary">To Instagram</a>
          </div>
        </div>
      </div>
     </div>

     <br>
<div class="row">

<div class="col-md-4 Discord">
        <div class="card">
          <div class="card-body text-center">
            <h5 class="card-title text-center">Discord</h5>
            <img class="d-block w-50 center" src="img/Discord.png">
            <br>
            <a href="https://discord.gg/DE46QYq" target="_blank" class="btn btn-primary">To Discord</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 Facebook">
        <div class="card">
          <div class="card-body text-center">
            <h5 class="card-title text-center">Facebook</h5>
            <img class="d-block w-50 center" src="img/Facebook.png">
            <br>
            <a href="https://www.facebook.com/profile.php?id=100010453531111" target="_blank" class="btn btn-primary">To Facebook</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 Twitter">
        <div class="card">
          <div class="card-body text-center">
            <h5 class="card-title text-center">Twitter</h5>
            <img class="d-block w-50 center" src="img/Twitter.png">
            <br>
            <a href="https://twitter.com/thijs_kessel" target="_blank" class="btn btn-primary">To Twitter</a>
          </div>
        </div>
      </div>
  </div>
  </div>
  </div>

      <?php
			include("inc/Footer.php");
			FooterThijs();
		?>
</div>


  	  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>