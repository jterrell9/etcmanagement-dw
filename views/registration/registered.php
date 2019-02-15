<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>etc management</title>
	<meta name="description" content="etc management artist digital media promotions">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="../../controllers/normalize.css">
	<link rel="stylesheet" href="css/registration.css">
	
	<!--FONTS-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

	<meta name="theme-color" content="#fafafa">
</head>

<body>
	
	<?php
		include '../../controllers/php/registration-form.php';
	?>

<!--LOGO-->  
	<section id="logo-container">
		<div id="logo" class="honey-script"><a href="https://www.jackterrell.org/etcmanagement">etc management</a></div>
	</section>
	
<!--REGISTER-->
	<section id="registration">
		<?php
		if($passwordIsValid){
			echo '<h2>Thank you for joining Etc. Management, '.$name.'!</h2>\n';
			echo '<p>Please check your email to confirm your account</p>\n';
			
			$subject = 'Welcome '.$name.' to the Etc Family!';
			$message = 'Hello '.$name.',\n'.
				'We are so glad you decided to take a big step in digital media marketing.  We have wonderful services available to you so that you can grow your brand as an artist.  Please take this opportunity to view these services on our website, and explore your user portal.\n'.
				'Sincerely,\nEtc Management team';
			
				
		}else{
			echo '<h2>Sorry, your passwords did not match, please click below to try again</h2>\n';
			echo '<form method="post" action="register.php" onSubmit="php/retry-registration.php">\n';
			echo '\t<input type="hidden" name="name" value="'.$name.'">\n';
			echo '\t<input type="hidden" name="email" value="'.$email.'">\n';
			echo '\t<input type="hidden" name="phone" value="'.$phone.'>\n';
			echo '\t<button type="submit">Retry</button>\n';
			echo '</form>\n';
		}
		?>
	</section>

<!--SCRIPTS-->
	<script src="../../controllers/lib/jquery-3.3.1.min.js"></script>
	
<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
	<script>
	window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
	ga('create', 'UA-134328256-1', 'auto'); ga('send', 'pageview')
	</script>
</body>

</html>
