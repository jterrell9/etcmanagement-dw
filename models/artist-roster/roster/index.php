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
	<link rel="icon" type="image/png" href="../../../assets/img/etc-favicon.png">

	<!--CSS stylesheets-->
	<link rel="stylesheet" href="../../../controllers/css/normalize.css">
	<link rel="stylesheet" href="../../../controllers/css/global.css">
	<link rel="stylesheet" href="css/frankie-sinn.css">
	
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
	
</head>

<body>
	<?php
		require_once 'frankie_sinn/frankie-sinn.php';
	?>
	
<!--ARTIST INFO-->
	<section id="artist-info">
		<h1><?php echo $frankie_sinn->getStr_name(); ?></h1>
		<h2><?php echo $frankie_sinn->getStr_artist_type(); ?></h2>
		<h3>Genres: <?php echo $frankie_sinn->getStr_genres(); ?></h3>
		<h3>Social Media Links:</h3>
		<?php 
			echo $frankie_sinn->getHTML_social_media();
			echo $frankie_sinn->getHTML_bookings(); 
		?>
		<h3>Bio: <?php echo $frankie_sinn->getStr_bio(); ?></h3>
		<h3>Press Links:</h3>
		<?php echo $frankie_sinn->getHTML_press_links(); ?>
		<h3>Image assets:</h3>
		<?php echo $frankie_sinn->getHTML_image_files('img/'); ?>
	</section>
	
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