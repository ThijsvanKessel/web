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
        <h1 class="display-4">Pro Task</h1>
        <p class="lead">Here you can see how we made the protask.<br>
        What is the protask? The protask is a big project that you make at the end of the schoolyear. During the protask you work together with 2 other persons.
        Me and my friends chose to make a rock, paper, scissors game that works via your webcam. We had the idea to make it so that it would see and proces your gestures.
        This in fact was too hard so we finally decided that it would work with color recognition. It still was quite difficult but we got it to work.<br><br>
        We made the program in Python. This made it more challenging for us since we wont learn Python at school. The nice thing about Python is that there are many libraries available.
        Because of the availability of those libraries, we found one named OpenCV that works with computer vision. Exactly what we needed. So we invested our time in learning how to work with the library.
        After we knew how to go to work with it, we began with writing a normal version of rock, paper and scissors. We made a new version everytime we had made something that was usefull. This is so that we would always have a working version of the game.
        at some point we had live feed from the camera but didn't know how we could use it. What we did was write some code that counts the amount of pixels every color has and pick the one that had the most pixels.
        To get this to work we had to put an HSV filter and a specific color filter over the live feed, this was trickier than we thought. So we let the camera make a picture and let it put the filters over the picture. This made sure that we still had a normal version of the live feed.
        At this point we were almost done. We added a few difficulties and the option to choose the amount of rounds you had to win. The difficulties were simply a percentage.<br><br>
        You operate the program by starting the main.py file. This will boot the program and start up the camera if you have one attached. The screen will display your live feed on your screen, and say that you need to select your difficulty.
        You can do this by holding up a red, green or blue piece of paper in front of the camera. Each paper has different values attached: Red is hard difficulty, 5 rounds and paper. Green is easy difficulty, 1 round and Rock. Blue is normal difficulty, 3 rounds and scissors.
        after selecting your difficulty, it is time to select your amount of rounds. You do this in the same way as the difficulty. The setup of the game is now done. It is time to play. You once again hold the paper up to the camera and press the spacebar.
        In the live feed you will see your score, the AI's sccore and who won the last point. After someone reaches the point goal, the game will wait for a bit and shut down.</p>
        <a> click <a href="https://github.com/JariHeijden/rock-paper-code/tree/App">here</a> to go to the github for the code.<br></a>
        <img src="img/RPCLogo.png" width="18%">
        <img src="img/HSVfilter.png" width="20%">
        <img src="img/Colorfilter.png" width="20%">
        <img src="img/Code.png" width="36%">
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