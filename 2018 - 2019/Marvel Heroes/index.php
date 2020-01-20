<?php
include 'dbconnect.php';

    if(!isset($_GET["TeamID"]) || $_GET["TeamID"] == 0) {
        $sql1 = "SELECT * From hero";
    }else {
        $categoryId = $_GET["TeamID"];

        $sql1 = "SELECT * From hero WHERE TeamID = '$categoryId'";
    }

    $resultHero = mysqli_query($connect, $sql1);

    $sql3 = "SELECT * FROM team";
	$resultTeam = mysqli_query($connect, $sql3);
	
	if(isset($_GET["HeroID"])) {

        $Hero = $_GET["HeroID"];

        $sql2 = "SELECT * From hero WHERE HeroID = '$Hero'";
    }else {
        $sql2 = "SELECT * From hero LIMIT 1";
    }

    $resultPokemon = mysqli_query($connect, $sql2);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Marvel Heroes">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/mainnav.css">
    <title>Marvel Heroes</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/Favicon.jpg">  <!--Favicon Code http://www.websonic.nl/tutorials/websitehtmlxhtml/html_favicon.php-->
</head>
<body>
<?php
			include("inc/Header.php");
			Headertest();
		?>

	
<div id="main-container">

<div id="main-left">
<h1>
        <?php 
                if (!isset($_GET['TeamID']))
                {
                    echo "<a href=\"index.php?TeamID=0\">Teams</a>";
                } else {
                    echo "<a href=\"index.php?TeamID=0"."&HeroID=".$_GET['HeroID']."\">Teams</a>";
                }
            ?>
        </h1>
        <nav>
        <ul>
            <?php
                if ($resultTeam->num_rows > 0) 
                       {
                           while($row = $resultTeam->fetch_assoc()) 
                            {
                                if (!isset($_GET['HeroID']))
                                {
                                    echo "<li>". 
                                    "<a href=\"index.php?TeamID=".$row["TeamID"]."\">".$row["ItemName"].
                                   "</li>";
                                } else {
                                    echo "<li>". 
                                    "<a href=\"index.php?TeamID=".$row["TeamID"]."&HeroID=".$_GET['HeroID']."\">".$row["ItemName"].
                                   "</li>";
                                }
                            }
                    }
                    else 
                    {
                    echo "0 results";
                    }
                    ?>
        </ul>
                </nav>
</div>

<div id="main-center">
<?php
            if ($resultHero->num_rows > 0) 
                    {
                        while($row = $resultHero->fetch_assoc()) 
                        {
                            echo "<div class=\"heroes\">" . 
                                        "<ul>".
                                        "<h1>".$row["HeroName"]."</h1>".
                                        "<img src=\"img/".$row["HeroImage"]."\" alt=\"banner-Hero\">".
                                        "<p>".$row["HeroDescription"]."</p>".
                                        "</ul>";
                                        if(!isset($_GET['TeamID'])) {
                                            echo "<a href=\"index.php?HeroID=".$row["HeroID"]."\">More Info!</a></div>";
                                        }
                                        else {
                                            echo "<a href=\"index.php?HeroID=".$row["HeroID"]."&TeamID=".$_GET['TeamID']."\">More Info!</a></div>";
                                        }

                        }
                    }

                    ?>
</div>

<div id="main-right">
<h1>
        <?php 
            if ($resultPokemon->num_rows > 0) 
            {
                while($row = $resultPokemon->fetch_assoc()) 
                {
                    echo "<div class=\"heroes2\">" .
                    "<h1>".$row["HeroName"]."</h1>".
                    "<img src=\"img/".$row["HeroImage"]."\" alt=\"banner-Hero\">".
                    "<p>".$row["HeroDescription"]."</p>".
                    "<p>".$row["HeroPowers"]."</p>".
                    "<textarea id=\"TextArea\" cols=\"20\" rows=\"5\" ></textarea>";
                    
                }
            }
            else {
            echo "0 results";
            }
        ?>
        </h1>
</div>

</div>