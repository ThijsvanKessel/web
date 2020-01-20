<?php
function games()
{
	if(isset($_GET['catId']))
	{
		$catId = $_GET['catId'];
	}
	else
	{
		$catId = rand(1,3);
	}
	if(isset($_GET['sortOption']))
	{
		$sortOption = $_GET['sortOption'];
	}
	else
	{
		$sortOption = 'categoryName DESC';
	}
		$connect = mysqli_connect("localhost","root","", "gameworld 2");
		// if(in_array($catId, array(1,2,3)))
	if ($catId == 1 || $catId == 2 || $catId == 3 )
		{
	$sql = "SELECT * FROM category, games"
	    . " WHERE category.categoryId = games.categoryId"
	    . " AND games.categoryId = ". $catId." ORDER BY $sortOption";
		}
	else if ($catId == 0) 
	{
		$sql = "SELECT * FROM category , games WHERE category.categoryId = games.categoryId ORDER BY $sortOption";
	}
	    $resource = mysqli_query($connect, $sql);

	    $games = array();
	    while($result = mysqli_fetch_assoc($resource))
	    {
	    	$games[] = $result;
	    }

	   echo "<pre>";
	//    var_dump($games);
	   echo "</pre>";
	    ?>
		<div id="containerShop">
		<form name="orderForm" action="addToCart.php" method="POST">
		<div class="dropdown">
				<li><a href="Shop.php?catId=<?=$catId?>&sortOption=categoryName DESC" class="dropbtn">Sort</a></li>
				  <div class="dropdown-content">
				   <a href="Shop.php?catId=<?=$catId?>&sortOption=gamePrice ASC">Price Low/High</a>
				   <a href="Shop.php?catId=<?=$catId?>&sortOption=gamePrice DESC">Price High/Low</a>
				    <a href="Shop.php?catId=<?=$catId?>&sortOption=gameTitle ASC">Title A/Z</a>
				    <a href="Shop.php?catId=<?=$catId?>&sortOption=gameTitle DESC">Title Z/A</a>
				    <a href="Shop.php?catId=<?=$catId?>&sortOption=categoryName DESC">Console</a><!-- Credits to Dylan-->
				  </div>

				</div>
				<input id="submit" type="submit" name="myOrderFormSubmit" value="Order selected items" />
				<br>
				

		<?php
	    foreach($games as $k=>$game)
	    {?>
		
				
				<li class="Games">
					<div class="BuyGame">
						<img src=" <?php echo $game['gameImage']; ?>">
						<div class="info">
							<br>
							<br>
							<h1><?php echo $game['gameTitle']; ?></h1>
							<br>
							<p><?php echo $game['gameDesciption']; ?></p>
						</div>
							<div class="pricetag">
								&euro; <?php echo $game['gamePrice']; ?>
							</div>
						<a class="buy" href="index.php"><input class="checkbox" type="checkbox" name="gameIds[]" value="<?php echo $game['gameId']; ?>"/></a>
					
					</div>
				</li>
				<?php
			}
			?>
			
	</form>
		</div>

<?php		
}
?>