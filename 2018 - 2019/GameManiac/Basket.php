<?php  
include("inc/db.php");
$totalPrice = 0;
//error_reporting(E_ERROR | E_PARSE);
session_start();
	if (isset($_GET['delete'])){
		unset($_SESSION['gameIds']);
	}
?>
		<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Game Maniac">
	<link rel="stylesheet" type="text/css" href="css/Basket.css">
	<link rel="stylesheet" type="text/css" href="css/mainnav.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="shortcut icon" href="img/i.png">
	
	<title>Game Maniac</title>
</head>
<body>
<?php
			include("inc/Header.php");
			Headertest();
			?>
<div class="container">
<table class="table table-striped">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Platform</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
  <?php 
foreach ($_SESSION['gameIds']as $key => $value) {
	$sql = 'SELECT * FROM `games` WHERE gameId =' . $key;
	$sql = connectDB($sql);
  ?>
    <tr>
      <th scope="row"><?= $sql[0]['gameId'] ?></th>
      <td><?= $sql[0]['gameTitle'] ?></td>
	  <?php 
	 	if($sql[0]['categoryId'] == 1){
			 ?> 
			 <td>Xbox</td><?php
		 } 
		 if($sql[0]['categoryId'] ==2){
			?> 
			<td>PC</td><?php
		 }if($sql[0]['categoryId']== 3){
			?> 
			<td>PS4</td><?php
		 }
	  ?>
      <td><?= $sql[0]['gamePrice'] ?></td>
    </tr>

	<?php 
	
	$totalPrice = $totalPrice + $sql[0]['gamePrice'];


}?>
		<tr>
      <td colspan="4" class="text-right">
			<?php
				$totalPrice = round($totalPrice,2);
				echo "€".number_format((float)$totalPrice, 2, ',', '');
				
		?>

			</td>
    </tr>
  </tbody>
</table>
<button type="button" class="btn btn-danger">Reset</button>
<button type="button" class="btn btn-success">Proceed to checkout</button>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<?php
					include("inc/Foeter.php");
					Footer2();
				?>
</body>
</html>
