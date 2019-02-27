<!doctype html>

<!--Authored by Jack Terrell-->
<!--Copyright StrongWares LLC and Etc. Management LLC 2019-->

<html lang="en">

<head>
	<meta charset="utf-8">
	
	<title>Admin - Add Artist</title>
	
	<!--META tags-->
	<meta name="description" content="etc management artist digital media promotions">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--Favicon-->
	<link rel="icon" type="image/png" href="../../../assets/img/etc-favicon.png">

	<!--CSS stylesheets-->
	<link rel="stylesheet" href="../../../controllers/css/normalize.css">
	<link rel="stylesheet" href="../../../controllers/css/global.css">
	<link rel="stylesheet" href="css/addArtistForm.css">
	
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
	<section id="artist-info-form">
		<form name="add-artist-form" id="add-artist-form" method="post" onSubmit="../../controllers/php/registration-form.php" action="registered.php">
			<table id="form-table">
				<tr>
					<td class="label-cell"><label for="artist-name" style="margin: 0px 5px 0px 20px;">Artist Name:</label></td>
					<td><input type="text" name="artist-name" size="40" required /></td>
				</tr>
				<tr>
					<td class="label-cell"><label for="instagram" style="margin: 0px 5px 0px 20px;">Instagram Name:</label></td>
					<td><input type="text" name="instagram" id="instagram" size="40" maxlength="40" value="<?php echo $instagram; ?>" /></td>
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
</body>
</html>