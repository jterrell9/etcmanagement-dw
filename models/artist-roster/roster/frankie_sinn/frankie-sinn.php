<?php
//Authored by Jack Terrell
//Copyright StrongWares LLC and Etc. Management LLC 2019
//this file creates an Artist object for Frankie Sinn

require_once '../../../../controllers/php/util.php';
require_once '../../Artist_class.php';

$name = 'Frankie Sinn';
$artist_type = array('MC', 'Rapper');
$genres = array('(host) Dubstep', 'Riddim', 'Heavy Bass', 'Trap');
$social_media = array(
	'Facebook' => 'https://www.facebook.com/FrankieSinn/',
	'Instagram' => 'https://www.instagram.com/followfrankieee/',
	'YouTube' => 'https://www.youtube.com/frankiesinn',
	'Soundcloud' => 'https://soundcloud.com/frankiesinn',
	'Twitter' => 'https://twitter.com/followfrankieee',
	'Curse Him Hex Him' => 'https://www.facebook.com/FrankieSinn/videos/733367953695866/',
	'Witch N***A Video' => 'https://youtu.be/e3eqVHyI1lI'
);
date_default_timezone_set('America/New_York');
$bookings = array(
	new Booking('Slander (MC)', $date = mktime(0, 0, 0, 10, 0, 2018), date('F, Y', $date), 'Buckhead Theater'),
	new Booking('Ray Vlope (MC)', $date = mktime(0, 0, 0, 11, 0, 2018), date('F, Y', $date), 'Opera Atlanta'),
	new Booking('Squnto (MC)', $date = mktime(0, 0, 0, 12, 0, 2018), date('F, Y', $date), 'Terminal West'),
	new Booking('Shaky Beats', $date = mktime(0, 0, 0, 0, 0, 2018), date('Y', $date), 'Piedmont Stage'),
	new Booking('Going Up', $date = mktime(0, 0, 0, 2, 26, 2019), date('F j, Y', $date), 'Music Room'),
	new Booking('Iris Presents', $date = mktime(0, 0, 0, 12, 29, 2019), date('l', $date), 'Believe Music Hall', 'Resident MC'),
	new Booking('404 Day', $date = mktime(0, 0, 0, 4, 4, 2019), date('F j, Y', $date), '')
);
$bio = 'INSERT FRANKIE SINN BIO HERE';
$image_files = scan_photo_dir('./img/');
$press_links = array(
	"https://creativeloafing.com/content-168415-Ricky-Raw's-bass-music-top-5",
	"http://voyageatl.com/interview/meet-roosevelt-council-vandal-rose-west-atlanta/",
	"http://voyageatl.com/interview/meet-frankie-sinn-frankie-sinn-west-atlanta/",
	"http://www.masqueradeatlanta.com/attraction/frankie-sinn/",
	"https://local.creativeloafing.com/event-303524-Esham,-Frankie-Sinn"
);
$frankie_sinn = new Artist($name, $artist_type, $genres, $social_media, $bookings, $bio, $image_files, $press_links);
?>