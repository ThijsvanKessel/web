<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/Favicon.png" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Login</title>
</head>
<body>
    <?php
        include("include/header.php");
        HeaderThijs();
    ?>
    <div id="title-container">
        <h1>Signup</h1>
    </div>
    <div id="main-container">
        <form method="POST" action="created.php">
            <input type="text" name="firstname" placeholder="Firstname" id="input-box1">
            <input type="text" name="lastname" placeholder="Lastname" id="input-box2">
            <input type="text" name="streetname" placeholder="Street name" id="input-box1">
            <input type="number" name="housenumber" placeholder="House number" id="input-box2">
            <input type="text" name="addition" placeholder="Addition" id="input-box1">
            <input type="text" name="zipcode" placeholder="Zipcode" id="input-box2">
            <input type="text" name="city" placeholder="City" id="input-box1">
            <input type="text" name="email" placeholder="Email" id="input-box2">
            <input type="password" name="password" placeholder="Password" id="input-box1">
            <input type="password" name="passwordconfirm" placeholder="Password Conformation" id="input-box2">
            <input type="checkbox" name="Tos"id="input-box1" required><a>Terms of service</a>
            <input type="submit" name="submit" value="Submit"id="input-box3">
        </form>
    </div>
    <?php
        include("include/footer.php");
        FooterThijs();
    ?>
</body>
</html>
