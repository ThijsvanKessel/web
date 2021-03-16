<?php
$guess = 0;
$min = 0;
$max = 0;
$random = 0;

if (isset($_POST['submit'])) {
    $min = $_POST['min-num'];;
    $max = $_POST['max-num'];;
    $random = rand($min, $max);
    echo $random;
    $guess = $_POST['guess']; // Add this to set value for $num variable
        if ($guess < $random) 
        {
            echo " Your number is lower! <br />";
        } elseif ($guess > $random) 
            {
            echo " Your number is higher! <br />";
        } elseif ($guess == $random) 
            {
            echo " Congratulations! You guessed the hidden number. <br />";
        } else 
            {
            echo " You never set a number! <br />";
        }
}
?>