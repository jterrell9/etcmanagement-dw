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
	
	<?php
	//update roster from form
	if(isset($_POST['artist-name']) and isset($artist) and isset($roster_filename) and isset($images_dir)){
		$new_name = filter_input(INPUT_POST, 'artist-name');
		
	}
	
	?>
	
<!--ARTIST INFO FORM-->
	<section id="artist-info-form">
		<form name="add-artist-form" id="add-artist-form" method="post" action="index.php" >
			<table id="form-table">
				<tr>
					<form name="update-artist-name" method="post" action="index.php">
						<td class="label-cell"><label for="artist-name" style="margin: 0px 5px 0px 20px;">Artist Name:</label></td>
						<td><input type="text" name="artist-name" size="40" 
								   <?php if(isset($_POST['artist-name'])) {echo "value=\"{$_POST['artist-name']}\"";}?> 
								   required /></td>
						<td><button type="submit" class="update" value="name-button">+</button></td>
					</form>
				</tr>
				<tr>
					<td class="label-cell"><label for="instagram" style="margin: 0px 5px 0px 20px;">Instagram Name:</label></td>
					<td><input type="text" name="instagram" id="instagram" size="40" maxlength="40" value="<?php echo $instagram; ?>" /></td>
					<td><button type="submit" class="update" value="name-button">+</button></td>
				</tr>
				<tr>
					<td class="label-cell"><label for="fname" style="margin: 0px 5px 0px 20px;">First Name:</label></td>
					<td><input type="text" name="fname" id="fname" size="40" maxlength="40" value="<?php echo $fname; ?>" required /></td>
				</tr>
				<tr>
					<td class="label-cell"><label for="lname" style="margin: 0px 5px 0px 20px;">Last Name:</label></td>
					<td><input type="text" name="lname" id="lname" size="40" maxlength="40" value="<?php echo $lname; ?>" required /></td>
				</tr>
				<tr>
					<td class="label-cell"><label for="email" style="margin: 0px 5px 0px 20px;">Email:</label></td>
					<td><input type="email" name="email" id="email" size="40" maxlength="60" value="<?php echo $email; ?>" required /></td>
				</tr>
				<tr>
					<td class="label-cell"><label for="phone" style="margin: 0px 5px 0px 20px;">Phone:</label></td>
					<td><input type="tel" name="phone" id="phone" size="40" maxlength="10" value="<?php echo $phone; ?>" /></td>
				</tr>
				<tr>
					<td class="label-cell"><label for="password" style="margin: 0px 5px 0px 20px;">Password:</label></td>
					<td><input type="password" name="password" id="password" size="40" maxlength="40" required /></td>
				</tr>
				<tr>
					<td class="label-cell"><label for="password-retype" style="margin: 0px 5px 0px 20px;">Retype Password:</label></td>
					<td><input type="password" name="password-retype" id="password-retype" size="40" maxlength="40"  required/></td>
				</tr>
				<tr>
					<td colspan="2" id="button-cell"><button type="submit">Register</button></td>
				</tr>
			</table>
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
