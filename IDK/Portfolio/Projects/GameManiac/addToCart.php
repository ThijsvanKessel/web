<?php
session_start();
///thanks ryan
	if(isset($_POST['myOrderFormSubmit']))
	{
		if(!isset($_SESSION['gameIds']))
		{
			$_SESSION['gameIds'] = array();
		}

		foreach ($_POST['gameIds'] as $gameId)
		{
			$_SESSION['gameIds'] [$gameId]++;
		}
		header("location:Basket.php");
	}
?>