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
	
	if(passwordIsValid){
		include 'php/landing-form.php';
	}else{
		include 'php/retry-registration.php';
	}
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
		<h1 style="margin: 0px;">Join Our Growing Team!</h1>
		<p style="font-size: 10px; margin: 0px;">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
		<?php
		
		if(!$passwordIsValid){
			echo '<p style="color: red;">*Passwords do not match!</p>';
		}
		
		?>
		<form name="register" id="register-form" method="post" onSubmit="php/registration-form.php" action="registered.php">
			<table id="form-table">
				<tr>
					<td class="label-cell"><label for="name" style="margin: 0px 5px 0px 20px;">Name:</label></td>
					<td><input type="text" name="name" id="name" size="40"  value="<?php echo $name; ?>" required /></td>
				</tr>
				<tr>
					<td class="label-cell"><label for="email" style="margin: 0px 5px 0px 20px;">Email:</label></td>
					<td><input type="email" name="email" id="email" size="40" value="<?php echo $email; ?>" required /></td>
				</tr>
				<tr>
					<td class="label-cell"><label for="phone" style="margin: 0px 5px 0px 20px;">Phone:</label></td>
					<td><input type="tel" name="phone" id="phone" size="40" value="<?php echo $phone; ?>" required /></td>
				</tr>
				<tr>
					<td class="label-cell"><label for="password" style="margin: 0px 5px 0px 20px;">Password:</label></td>
					<td><input type="password" name="password" id="password" size="40" required /></td>
				</tr>
				<tr>
					<td class="label-cell"><label for="password-retype" style="margin: 0px 5px 0px 20px;">Retype Password:</label></td>
					<td><input type="password" name="password-retype" id="password-retype" size="40" required/></td>
				</tr>
				<tr>
					<td colspan="2" id="button-cell"><button type="submit">Register</button></td>
				</tr>
			</table>
		</form>
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
