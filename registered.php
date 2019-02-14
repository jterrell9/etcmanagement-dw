<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>etc management</title>
	<meta name="description" content="etc management artist digital media promotions">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/registration.css">
	
	<!--FONTS-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

	<meta name="theme-color" content="#fafafa">
</head>

<body>
	<?php
		include 'php/registration-form.php';
	?>

	<!--[if lte IE 9]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	 <![endif]-->

<!--LOGO-->  
	<section id="logo-container">
		<div id="logo" class="honey-script"><a href="https://www.jackterrell.org/etcmanagement">etc management</a></div>
	</section>
	
<!--REGISTER-->
	<section id="register">
		<h1 style="margin: 0px;">Thank you for joining Etc. Management, <?php echo $name;?></h1>
		
	</section>
	
	
	<!--NAVIGATION-->
<!--
	<nav class="navigation">
		<table width="100%">
			<tr>
				<td width="200px" class="honey-script"><div id="homebutton"><a href="https://www.jackterrell.org/etcmanagement">etc management</a>x</div></td>
				<td>
					<ul>
						<li><a href="#"><span>Services</span></a></li>
						<li><a href="#"><span>Artists</span></a></li>
						<li><a href="#"><span>Blog</span></a></li>
						<li><a href="#"><span>Contact</span></a></li>
						<li class="account"><a href="#"><span>My Account</span></a></li>
					</ul>
				</td>
			</tr>
		</table>
	</nav>
-->

<!--SCRIPTS-->
	<script src="lib/jquery-3.3.1.min.js"></script>
	
<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
	<script>
	window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
	ga('create', 'UA-134328256-1', 'auto'); ga('send', 'pageview')
	</script>
</body>

</html>
