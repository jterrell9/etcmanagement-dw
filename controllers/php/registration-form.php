<!--Registration form processing and validation script-->
<!--Authored by Jack Terrell-->
<!--Copyright StrongWares Consulting LLC and Etc. Management LLC 2019-->

<?php
$artistName = filter_input(INPUT_POST, 'artist-comp-name');
$instagram = filter_input(INPUT_POST, 'instagram');
$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$password = filter_input(INPUT_POST, 'password');
$retype = filter_input(INPUT_POST, 'password-retype');
if($password != $retype){
	$isValid = false;
}else{
	$isValid = true;
}
?>