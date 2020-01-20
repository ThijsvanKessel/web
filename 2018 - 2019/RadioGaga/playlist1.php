<?php
$album = array
(
	"Blurryface" => array(
		"artist" 	=> 	"Twenty one Pilots",
		"image"		=> 	"Blurryface-Cover.png",
		"year"		=> 	2015,
		"tracks"	=>	array
		(
			0		=> array
			(
				0 => "1",
				1 => "Stressed Out",
				2 => "3:22",
				3 => "Blurryface/Stressed Out.mp3"
			),

			1		=> array
			(
				0 => "2",
				1 => "Ride",
				2 => "3:34",
				3 => "Blurryface/Ride.mp3"
			),

			2		=> array
			(
				0 => "3",
				1 => "Tear In My Heart",
				2 => "3:08",
				3 => "Blurryface/Tear In My Heart.mp3"
			)
		)
    ),
    
    "Trench" => array(
		"artist" 	=> 	"Twenty one Pilots",
		"image"		=> 	"Trench-Cover.jpg",
		"year"		=> 	2018,
    ),

    "Vessel" => array(
		"artist" 	=> 	"Twenty one Pilots",
		"image"		=> 	"Vessel-Cover.jpg",
        "year"		=> 	2013,
    )
);

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Radio Gaga. - Enjoy The Greatest Hits">
		<link rel="stylesheet" type="text/css" href="css/style2.css">
		<title>Radio Pilots.</title>
	</head>
	<body>
		<header id="header">
			<div id="logo">Radio Pilots</div>
				<nav id="main-nav">
					<ul>
						<li><a href="home.html">Home</a></li>
						<li><a href="playlist.php">Playlist</a></li>
					</ul>
				</nav>
		</header>
	
		<div id="multimeida-container">
			<div id="album-container">
				<ul>
					<h1> Albums </h1>
				<li><a href="playlist.php">
						<img src="images/<?php echo $album['Vessel']['image'];?>">
					</a></li>
				<li><a  href="playlist1.php">
						<img src="images/<?php echo $album['Blurryface']['image'];?>">
					</a></li>
				<li><a href="playlist2.php">
						<img src="images/<?php echo $album['Trench']['image'];?>">
					</a></li>
				</ul>
			</div>

            <h1> Songs </h1>
            <div id="Blurryface">
					<table class="table-fill">
						<thead>
							<tr>
								<th class="text-left">Track</th>
								<th class="text-left">Title</th>
								<th class="text-left">Time</th>
								<th class="text-left">Play</th>
							</tr>
						</thead>


						<tbody class="table-hover">
						<?php 
						for ($al=0; $al < count($album["Blurryface"]["tracks"]); $al++) { 
						echo "<tr>"; 
						for ($iets=0; $iets < 3; $iets++){
							echo "<td>";
							echo $album["Blurryface"]["tracks"][$al][$iets]; 
							echo "</td>";
						}
						?>
							<td>
								<audio controls src="songs/<?php echo $album["Blurryface"]["tracks"][$al][$iets]; ?>"></audio>
							</td>

						<?php
						echo "</tr>";
						}
						?>						
					</tbody>
				</table>
            <h1>Video</h1>
        <iframe
            width="420" height="315"
            src="https://www.youtube.com/embed/pXRviuL6vMY">
        </iframe>
        <br/>
			</div>
        </body>
    </html>