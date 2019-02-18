<!doctype html>

<!--REGISTERED PAGE-->

<html lang="en">

<head>
	<meta charset="utf-8">
	<title>etc management</title>
	<meta name="description" content="etc management artist digital media promotions">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="../../assets/img/etc-favicon.png">

	<link rel="stylesheet" href="../../controllers/normalize.css">
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

<!--LOGO-->  
	<section id="logo-container">
		<div id="logo" class="honey-script"><a href="https://www.jackterrell.org/etcmanagement">etc management</a></div>
	</section>
	
<!--REGISTER-->
	<section id="registration">
		<?php
		include '../../controllers/php/registration-form.php';
		
		if($isValid){
			include '../../models/addMember.php';
			addMember($artistName, $fname, $lname, $email, $instagram, $phone, $password);

			echo '<h2>Thank you for joining Etc. Management, '.$fname.'!</h2>';
			echo '<p>Please check your email to confirm your account'."\r\n".
					'<br />sure to check your spam folder if it does not appear in your inbox.</p>'."\r\n".
					'<p style="color: red">Do not hit refresh or press back button</p>';

			$subject1 = 'Welcome '.$fname.' to the Etc Family!';
			$message1 = 'Hello '.$fname.' '.$lname.",\r\n\r\n\t".
				'We are so glad you decided to take a big step in digital media marketing.  We have wonderful services available to you so that you can grow your brand as an artist.  Please take this opportunity to view these services on our website, and explore your user portal.'."\r\n\r\n\t".
				'Sincerely,'."\r\n\t".'Etc Management team';
			$headers1 = 'From: etcmanagement@jackterrell.org' . "\r\n" .
						'Reply-To: etcmanagement@jackterrell.org' . "\r\n" .
						'X-Mailer: PHP/' . phpversion();
			mail($email, $subject1, $message1, $headers1);

			$subject2 = 'NEW USER ADDED TO DATABASE';
			$message2 = 'New user information:'."\r\n".
						'artst/company name: '.$artistName."\r\n".
						'instagram: '.$instagram."\r\n".
						'name: '.$fname.' '.$lname."\r\n".
						'email: '.$email."\r\n".
						'phone: '.$phone."\r\n";
			$headers2 = 'From: etcmanagement@jackterrell.org' . "\r\n" .
						'Reply-To: etcmanagement@jackterrell.org' . "\r\n" .
						'X-Mailer: PHP/' . phpversion();
			mail("etcmanagement@jackterrell.org", $subject2, $message2, $headers2);
		}else{
			echo '<h2>Sorry, your passwords did not match, please click below to try again</h2>'."\r\n".
				'<form method="post" action="register.php" onSubmit="php/retry-registration.php">'."\r\n".
				'<input type="hidden" name="artist-comp-name" value="'.$artistName.'">'."\r\n".
				'<input type="hidden" name="instagram" value="'.$instagram.'">'."\r\n".
				'<input type="hidden" name="fname" value="'.$fname.'">'."\r\n".
				'<input type="hidden" name="lname" value="'.$lname.'">'."\r\n".
				'<input type="hidden" name="email" value="'.$email.'">'."\r\n".
				'<input type="hidden" name="phone" value="'.$phone.'">'."\r\n".
				'<button type="submit">Retry</button>'."\r\n".
				'</form>'."\r\n";
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
