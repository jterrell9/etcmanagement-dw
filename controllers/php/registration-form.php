<?php

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$password = filter_input(INPUT_POST, 'password');
$retype = filter_input(INPUT_POST, 'password-retype');
if($password != $retype){
	$passwordIsValid = false;
}else{
	$passwordIsValid = true;
}
?>