<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/Favicon.png" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Home</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbName = "signinsignup";
        $conn = new mysqli($servername, $username, $password, $dbName);

        //get values from login.php
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $result = mysqli_query($conn,"SELECT * from users where email = '$user' and  pass = '$pass'")
                        or die("Failed to query database ".mysqli_error());
        $row = mysqli_fetch_array($result);

        if ($user == "" && $pass == "")
        {
            include("include/header.php");
            HeaderThijs();
            ?>
            <div id="login-screen">
                <a id="title">You are verry sneaky!</a><br><br>
                <img id="dino" src="img/dino.png">
                <a>Try</a>
                <a id="link" href="login.php">loggin in </a>
                <a>again, or </a>
                <a id="link" href="index.php">register.</a>
            </div>
            <?php
        }

        else if ($row['email'] == $user && $row['pass'] == $pass)
        {   ?>
            <header id="header">
 	            <div class="content-container">
                    <div class="navigation">
			            <nav class="main-nav">
                <?php
                    $result = mysqli_query($conn,"SELECT * FROM users WHERE email = '$user'")
                                or die("Failed to query database ".mysqli_error());
                    $row = mysqli_fetch_array($result);
                    echo "<li><a>Firstname: ".$row['firstName']."</li></a>".
                        "<li><a>Lastname: ". $row['lastName']."</li></a>".
                        "<li><a>Street: ". $row['streetName']."</li></a>".
                        "<li><a>Number: ". $row['houseNumber']. $row['addition']."</li></a>".
                        "<li><a>Zipcode: ". $row['zipCode']."</li></a>".
                        "<li><a>City: ". $row['cityName']."</li></a>".
                        "<li><a>Email: ". $row['email']."</li></a>".
                        "<li><a>Password: ". $row['pass']."</li></a>";
                ?>
                <li><a id="logout" href="login.php">Logout</a></li>
                </nav>
                    </div>
                </div>
            </header>
            <div id="home-screen">
                <a id="title">Welcome</a><br>
                <a id="name"><?php echo $row['email'];?></a><br>
                <a id="hscreen-text">On your personal homescreen. These are not the droids you're looking for.</a>
                <img src="img/kenobi.jpg" id="kenobi">
            </div>
            <?php
        }

        else
        {
            include("include/header.php");
            HeaderThijs();
            ?>
            <div id="login-screen">
                <a id="title">Something went wrong!</a><br><br>
                <img id="dino" src="img/dino.png">
                <a>Try</a>
                <a id="link" href="login.php">loggin in </a>
                <a>again, or </a>
                <a id="link" href="index.php">register.</a>
            </div>
            <?php
        }
        include("include/footer.php");
        FooterThijs();
    ?>
</body>
</html>