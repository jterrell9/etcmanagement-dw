<?php

$artistName = filter_input(INPUT_POST, 'artist-comp-name');
$instagram = filter_input(INPUT_POST, 'instagram');
$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');

$isValid = false;

?>