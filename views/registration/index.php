<!doctype html>

<!--REGISTRATION PAGE-->
<!--Authored by Jack Terrell-->
<!--Copyright StrongWares LLC and Etc. Management LLC 2019-->

<html lang="en">

<head>
	<meta charset="utf-8">
	<title>etc management</title>
	<meta name="description" content="etc management artist digital media promotions">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="../../assets/img/etc-favicon.png">

	<link rel="stylesheet" href="../../controllers/css/normalize.css">
	<link rel="stylesheet" href="../../controllers/css/global.css">
	<link rel="stylesheet" href="css/registration.css">
	
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
	
	if(passwordIsValid){
		include '../../controllers/php/landing-form.php';
	}else{
		include '../../controllers/php/retry-registration.php';
	}
	?>

<!--LOGO-->  
	<section id="logo-container">
		<div id="logo" class="honey-script"><a href="https://www.jackterrell.org/etcmanagement">etc management</a></div>
	</section>
	
<!--REGISTER-->
	<section id="register">
		<h1 style="margin: 0px;">Join Our Growing Team!</h1>
		<p style="font-size: 10px; margin: 0px;">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
		<p>We are doing all we can to keep your account secure, but even the best security means nothing without a secure password.
		<br />So please use at least 8 characters, at least one uppercase A-Z, lowercase a-z, and one special character.</p>
		<?php
		
		if(!$isValid){
			echo '<p style="color: red;">*Passwords do not match!</p>';
		}
		
		?>
		<form name="register" id="register-form" method="post" onSubmit="../../controllers/php/registration-form.php" action="registered.php">
			<table id="form-table">
				<tr>
					<td class="label-cell"><label for="artist-comp-name" style="margin: 0px 5px 0px 20px;">Artist/Company Name:</label></td>
					<td><input type="text" name="artist-comp-name" id="artist-comp-name" size="40"  maxlength="40" value="<?php echo $artistName; ?>" required /></td>
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

<!--SCRIPTS-->
	<script src="../../controllers/lib/jquery-3.3.1.min.js"></script>
	
	<noscript>
		<h1>JavaScript Error</h1>
		<p>Please enable javascript in your browser to use our page.  While you're at it, go ahead and enable cookies.  They are not a security threat as many believe.  Even though those rumors are untrue, it is true that 3rd party cookies can abuse its power in the name of advertising.  The only time we use 3rd party cookies is with google analytics to get an idea of our users' activities.  We never share your personal information with anyone. We are earnest and transparent about our usage of these great technologies, and would never do anything to hurt you or your devices.</p>
		<p>So please feel free to unleash your browser and emerse yourself into our web experience.  Our preffered browser at this time is Chrome.</p>
	</noscript>
	
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
