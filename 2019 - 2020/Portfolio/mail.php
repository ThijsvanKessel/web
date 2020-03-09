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
        <br><br><br>
        <div class="col-md-4 mail">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Complete</h5>
            <p class="card-text">Your email is sent succesfully.</p>
            <a href="index.php" class="btn btn-primary">Back home</a>
          </div>
        </div>
      </div>

    <div id="breaks">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <?php
			include("inc/Footer.php");
			FooterThijs();
		?>
        </body>
<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];

$content="From: $name \n Email: $email \n Message: $message";
$recipient = "thijsvankessel@hotmail.nl";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
?>

