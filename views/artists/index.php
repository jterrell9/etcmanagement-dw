<!doctype html>

<!--Authored by Jack Terrell-->
<!--Copyright StrongWares LLC and Etc. Management LLC 2019-->

<html lang="en">

<head>
	<meta charset="utf-8">
	
	<title>etc management</title>
	
	<!--META tags-->
	<meta name="description" content="etc management artist digital media promotions">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--Favicon-->
	<link rel="icon" type="image/png" href="../../assets/img/etc-favicon.png">

	<!--CSS stylesheets-->
	<link rel="stylesheet" href="../../controllers/css/normalize.css">
	<link rel="stylesheet" href="../../controllers/css/global.css">
	<link rel="stylesheet" href="css/artists.css">
	
	<!--FONTS-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
	
</head>

<body>
	
<!--INTRO TEXT-->  
	<section id="intro">
		<div id="intro-text" class="honey-script">Artists</div>
	</section>
	
<!--BUILD PHP ARTISTS ARRAY	-->
	<?php
	require_once '../../models/artist-roster/php/roster_util.php';
	
	$files = scandir('../../models/artist-roster/assets/');
	if($files) {
		$rosters = array();
		for($i=2; $i < count($files); $i++) {
			if(substr(strtolower($files[$i]), -7) === '.roster') {
				$rosters[] = $files[$i];
			}
		}
	}
	$srtists = array();
	foreach($rosters as $roster) {
		$artists[] = deserialize_artist('../../models/artist-roster/assets/'.$roster);
	}
	?>
	
<!--MAIN SECTION-->
	<section id="main">
		<!--DEFAULT DISPLAY-->
		<div id="default-display" style="text-align: center;">
			
			<div><h1 style="font-family: Permanent Marker;color: black;text-shadow: 0px 0px 5px orange;">
				Etc. Management is proud to present<br />these flagship artists</h1></div>
			
			<div id="image-scroller">
<!--				<img src="" alt="" id="topImg" />-->
				<img src="" alt="" id="bottomImg" />
			</div>
			
			<div id="text-bar1">
				<h1>Take a look at Etc. Management's talented roster of artists</h1>
				<br />
				<p>Our talent is the best in up and coming producers and performing artists</p>
			</div>
		</div>
		
		<!--ARTIST DISPLAY-->
		
	</section>
	
<!--NAVIGATION-->
	<nav class="navigation">
		<table width="100%">
			<tr>
				<td width="200px" class="honey-script"><div id="homebutton"><a href="https://www.jackterrell.org/etcmanagement">etc management</a></div></td>
				<td>
					<ul>
						<li><a href="../services/index.html"><span>Services</span></a></li>
						<li><a href="../artists/index.php"><span id="artist-drop">Artists</span></a></li>
						<li><a href="#"><span>Blog</span></a></li>
						<li><a href="#"><span>Contact</span></a></li>
						<li class="account"><a href="#"><span>My Account</span></a></li>
					</ul>
				</td>
			</tr>
		</table>
	</nav>
	
<!--ARTIST SELECTOR-->
	<nav class="artist-selector">
		<table width="100%">
			<tr>
				<td>
					<ul>
						<form name="artist-selector" method="post" action="setArtist.php">
							<?php 
							foreach($artists as $artist_item) {
								echo "<li class=\"artist-button\"><span>{$artist_item->getStr_name()}</span></li>\r\n";
							}
							?>
						</form>
					</ul>
				</td>
			</tr>
		</table>
	</nav>
	
<!--SCRIPTS-->
	<script src="../../controllers/lib/jquery-3.3.1.min.js"></script>
	<script src="js/animation.js"></script>
	<?php
	$photos = scan_photo_dir('assets/img/img-scroll');
	$json = json_encode($photos);
	?>
	<script type="text/javascript">
		$(function() {
			<?php echo "let images = {$json};\r\n"; ?>
			let path = 'assets/img/img-scroll/';
			let topImg = $('#topImg');
			let bottomImg = $('#bottomImg');
			let i = 0;
			setInterval(function() {
				if(i >= (images.length - 1)) {
					i = 0;
				}
				if(!(topImg.is(':visible'))){
					topImg.fadeIn(500);
				}
				topImg.attr({
					src: path + images[i],
					alt: images[i]
				});
				i++;
				bottomImg.attr({
					src: path + images[i],
					alt: images[i]
				});
				i++;
				topImg.delay(2000).fadeOut(500);
			}, 5000);
		});
	</script>
	
	<noscript>
		<h1>JavaScript Error</h1>
		<p>Please enable javascript in your browser to use our page.  While you're at it, go ahead and enable cookies.  They are not a security threat as many believe.  Even though those rumors are untrue, it is true that 3rd party cookies can abuse its power in the name of advertising.  The only time we use 3rd party cookies is with google analytics to get an idea of our users' activities.  We never share your personal information with anyone. We are earnest and transparent about our usage of these great technologies, and would never do anything to hurt you or your devices.</p>
		<p>So please feel free to unleash your browser and emerse yourself into our web experience.  Our preffered browser at this time is Chrome.</p>
	</noscript>
</body>
<footer>
	<div id="copyright">&#169; Etc. Management 2019</div>
</footer>
</html>
