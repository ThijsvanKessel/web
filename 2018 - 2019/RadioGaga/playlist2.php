<?php
$album = array
(
	"Trench" => array(
		"artist" 	=> 	"Twenty one Pilots",
		"image"		=> 	"Trench-Cover.jpg",
		"year"		=> 	2018,
		"tracks"	=>	array
		(
			0		=> array
			(
				0 => "1",
				1 => "My Blood",
				2 => "3:55",
				3 => "Trench/My Blood.mp3"
			),

			1		=> array
			(
				0 => "2",
				1 => "Chlorine",
				2 => "5:24",
				3 => "Trench/Chlorine.mp3"
			),
			
			2		=> array
			(
				0 => "3",
				1 => "Nico And The Niners",
				2 => "4:22",
				3 => "Trench/Nico And The Niners.mp3"
			),
		)
    ),

    "Blurryface" => array(
		"artist" 	=> 	"Twenty one Pilots",
		"image"		=> 	"Blurryface-Cover.png",
		"year"		=> 	2015,
    ),

    "Vessel" => array(
		"artist" 	=> 	"Twenty one Pilots",
		"image"		=> 	"Vessel-Cover.jpg",
		"year"		=> 	2013,
    )
)

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


			<div id="playlist-container">
			<h1> Songs </h1>
            <div id="Trench">
					<table class="table-fill">

						<thead>
							<tr>
								<th class="text-left">Track</th>
								<th class="text-left">Title</th>
								<th class="text-left">Time</th>
								<th class="text-left">play</th>
							</tr>
						</thead>

						<tbody class="table-hover">
						<?php 
						for ($al=0; $al < count($album["Trench"]["tracks"]); $al++) { 
						echo "<tr>"; 
						for ($iets=0; $iets < 3; $iets++){
							echo "<td>";
							echo $album["Trench"]["tracks"][$al][$iets]; 
							echo "</td>";
						}
						?>
							<td>
								<audio controls src="songs/<?php echo $album["Trench"]["tracks"][$al][$iets]; ?>"></audio>
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
            src="https://www.youtube.com/embed/hMAPyGoqQVw">
        </iframe>
        <br/>
    </div>
    </body>
	</html>



