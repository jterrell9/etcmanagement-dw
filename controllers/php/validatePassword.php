<?php

include 'registration-form.php';

if($password != $retype){
	header("Location: https://www.jackterrell.org/registration-form.php");
	die();
}else{
	$passwordIsValid = true;
}

?>