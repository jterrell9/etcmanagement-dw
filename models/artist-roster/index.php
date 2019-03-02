<!doctype html>

<!--Authored by Jack Terrell-->
<!--Copyright StrongWares LLC and Etc. Management LLC 2019-->

<html lang="en">

<head>
	<meta charset="utf-8">
	
	<title>Artist Info</title>
	
	<!--META tags-->
	<meta name="description" content="etc management artist digital media promotions">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--Favicon-->
	<link rel="icon" type="image/png" href="../../assets/img/etc-favicon.png">

	<!--CSS stylesheets-->
	<link rel="stylesheet" href="../../controllers/css/normalize.css">
	<link rel="stylesheet" href="../../controllers/css/global.css">
	<link rel="stylesheet" href="css/roster.css">
	
	<!--FONTS-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-134328256-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-134328256-1');
	</script>

	<!--PHP LIBRARIES AND FILES-->
	<?php
	require_once 'php/roster_util.php';
	?>
	
</head>

<body>
	
	<?php
	//builds arrays for artist selector
	$rosters = getRoster_filenames();
	$artists = array();
	foreach($rosters as $roster) {
		$artists[] = deserialize_artist('assets/'.$roster);
	}
	
	$artist_isset = false;
	if(isset($_GET['artist-selector']) or isset($artist)) {
		$selection = filter_input(INPUT_GET, 'artist-selector');
		if($selection != "Select Artist") {
			$artist_isset = true;
			$roster_filename = get_roster_filename($selection);
			$artist = deserialize_artist('assets/'.$roster_filename);
			$images_dir = 'assets/'.get_image_dir_name(filter_input(INPUT_GET, 'artist-selector')).'/';			
		}else{
			$roster_filename = NULL;
			$artist = NULL;
			$images_dir = NULL;
		}
	}
	?>
	
<!--SELECTION FORM-->
	<section id="selection-form" style="text-align: center;margin: 20px;">
		<form method="get" action="index.php">
			<label for="artist-selector">Select artist to view: </label>
			<select name="artist-selector" onChange="this.form.submit();" style="width: 200px;">
				<option value="Select Artist">Select Artist</option>
				<?php
				foreach($artists as $artist_item) {
					if($artist_isset){
						$selected_artist = filter_input(INPUT_GET, 'artist-selector');
						if($selected_artist === $artist_item->getStr_name()) {
							echo "<option value=\"{$selected_artist}\" selected=\"selected\">{$selected_artist}</option>\r\n";
							continue;
						}
					}
					$artist_name = $artist_item->getStr_name();
					echo "<option value=\"{$artist_name}\">{$artist_name}</option>\r\n";
				}
				?>
			</select>
		</form>
	</section>
	
<!--ARTIST INFO-->
	<?php if($artist_isset) { ?>
	<section id="artist-info">
		<h1><?php echo $artist->getStr_name(); ?></h1>
		<h2><?php echo $artist->getStr_artist_type(); ?></h2>
		<h3>Genres: <?php echo $artist->getStr_genres(); ?></h3>
		<h3>Social Media Links:</h3>
		<?php 
			echo $artist->getHTML_social_media();
			echo $artist->getHTML_bookings(); 
		?>
		<h3>Bio: <?php echo $artist->getStr_bio(); ?></h3>
		<h3>Press Links:</h3>
		<?php echo $artist->getHTML_press_links(); ?>
		<h3>Image assets:</h3>
		<?php echo $artist->getHTML_image_files($images_dir); ?>
	</section>
	<?php } ?>
	
<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
	<script>
	window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
	ga('create', 'UA-134328256-1', 'auto'); ga('send', 'pageview')
	</script>
</body>
<footer>
	<div id="copyright">&#169; Etc. Management 2019</div>
</footer>
</html>
