<?php

function connectDB($sql)
{
    $connect = mysqli_connect("localhost","root","", "gameworld 2"); //localhost

    $resource = mysqli_query($connect, $sql);
    $retuning_array = array();
    while($result = mysqli_fetch_assoc($resource))
    {
        $retuning_array[] = $result;
    }
    return $retuning_array;
}
?>