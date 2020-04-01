<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <!-- custom CSS -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Portfolio</title>
        <link rel="shortcut icon" type="image/x-icon" href="images/Logo.png">  <!--Favicon Code http://www.websonic.nl/tutorials/websitehtmlxhtml/html_favicon.php-->
    </head>
    <body>
        <?php
            include("include/header.php");
            headerFunction();
        ?>

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>Contact me:</h3>
                </div>
            </div>
        </div>
        <form id="contact-form" name="contact-form" action="mail.php" method="POST">
            <div class="container" id="ProjectCards">
                <div class="row">

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">name</h5>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Firstname + Lastname">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">e-mail</h5>
                                <input type="text" id="email" name="email" class="form-control"placeholder="example@email.com">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">subject</h5>
                                <input type="text" id="subject" name="subject" class="form-control"placeholder="your subject">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container" id="ProjectCards">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">message</h5>
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="your message"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
        </div>
    </body>
</html>