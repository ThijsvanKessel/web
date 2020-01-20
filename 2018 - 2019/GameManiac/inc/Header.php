<?php 
function Headertest()
{
 ?>
 <header id="header">
		<div id="logo"> 
			<a href="index.php">Game Maniac.</a>
		</div>
		<nav id="main-navigation">
			<ul>
				<li><a href="index.php">Home</a></li>	
				<div class="dropdown">
				<li><a href="Shop.php?catId=0" class="dropbtn">Shop</a></li>
				  <div class="dropdown-content">
				   <a href="Shop.php?catId=0">All</a>
				    <a href="Shop.php?catId=1">Xbox One</a>
				    <a href="Shop.php?catId=2">Playstation 4</a>
				    <a href="Shop.php?catId=3">PC</a>
				  </div>
				</div>
				<li><a href="Basket.php">Basket</a></li>
			</ul>
		</nav>
</header>
<?php
}
?>

