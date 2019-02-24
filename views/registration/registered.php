<!doctype html>

<!--REGISTERED PAGE-->
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

<!--LOGO-->  
	<section id="logo-container">
		<div id="logo" class="honey-script"><a href="https://www.jackterrell.org/etcmanagement">etc management</a></div>
	</section>
	
<!--REGISTER-->
	<section id="registration">
		<?php
		require_once '../../controllers/php/registration-form.php';
		
		if($isValid){
			require_once '../../models/addMember.php';
			if(addMember($artistName, $fname, $lname, $email, $instagram, $phone, $password)){
				echo '<h2>Thank you for joining Etc. Management, '.$fname.'!</h2>';
				echo '<p>Please check your email to confirm your account'."\r\n".
						'<br />sure to check your spam folder if it does not appear in your inbox.</p>'."\r\n".
						'<p style="color: red">Do not hit refresh or press back button</p>';
				
				require_once '../../controllers/php/message.php';
				
				//construct and bind message data for user email
				$from = 'Etc. Management <etcmanagement@jackterrell.org>';
				$to = $fname.' '.$lname.'<'.$email.'>';
				$subject = $fname.', Welcome to the Etc. Management Team!';
				$body = 'Congratulations on joining Atlanta\'s premiere artist management team!'."\r\n\r\n\t".
					'We are so glad you decided to take a big step in digital media marketing for '.$artistName.
					'. We have wonderful services available to you so that you can grow your brand.'."\r\n\r\n\t".
					'Now it\'s time to get started using our fantastic services.  Navigate to the "My Account" section of the website and begin building your services package. Then you\'re ready to start using them.  Explore the artist portal and link your instagram account to begin viewing personilized data analtics.'."\r\n\r\n\t".
					'From all of us here at Etc. Management, we wish you luck in your ventures as an artist, but it alway helps to be apart of the right team.  Welcome to the right team!'."\r\n\r\n\t".
					'Sincerely,'."\r\n\t".'Etc. Management';
				$headers = 'From: '.$from."\r\n".
    				'Reply-To: '.$from."\r\n".
    				'X-Mailer: PHP/' . phpversion();
				
				//send message to new user
				mail($to, $subject, $body, $headers);

				//construct and bind message data for admin email
				$from = 'Etc Management Webmaster <webmaster@jackterrell.org>';
				$to = 'Etc. Management <etcmanagement@jackterrell.org>';
				$subject = 'NEW USER INFO';
				$body = 'New website member:'."\r\n\r\n".
					'Artist/Company Name: '.$artistName."\r\n".
					'User\'s Name: '.$fname.' '.$lname."\r\n".
					'Email: '.$email."\r\n".
					'Phone: '.$phone."\r\n".
					'Instagram: '.$instagram;
				$headers = 'From: '.$from."\r\n".
    				'Reply-To: '.$from."\r\n".
    				'X-Mailer: PHP/' . phpversion();
				
				//send message to new user
				mail($to, $subject, $body, $headers);
				
//				try {
//					send_email($to, $from, $subject, $body, $is_body_html);
//				}catch (Exception $e) {
//					echo $e->getMessage();
//				}
			}else{
				echo '<h2>Sorry, an account for '.$email.' already exists</h2>'."\r\n";
			}
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
<footer>
	<div id="copyright">&#169; Etc. Management 2019</div>
</footer>
</html>
