<?php
//Authored by Jack Terrell
//Copyright StrongWares Consulting LLC and Etc. Management LLC 2019

//landing page join form processing and validation

$artistName = filter_input(INPUT_POST, 'artist-comp-name');
$email = filter_input(INPUT_POST, 'email');

$isValid = true;

?>