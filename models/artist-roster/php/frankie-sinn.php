<?php
//Authored by Jack Terrell
//Copyright StrongWares LLC and Etc. Management LLC 2019

//this file creates an Artist object for Frankie Sinn, emulating what the admin form will do

require_once 'Artist_class.php';
require_once 'roster_util.php';

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
	new Booking('404 Day', $date = mktime(0, 0, 0, 4, 4, 2019), date('F j, Y', $date), 'Venue TBA')
);
$bio = 'INSERT FRANKIE SINN BIO HERE';
$press_links = array (
	'Creative Loafing, 6/16/2016 - Ricky Raw\'s bass music top 5' => "https://creativeloafing.com/content-168415-Ricky-Raw's-bass-music-top-5",
	'VoyageATL, 2/14/2018 - Meet Roosevelt Council of Vandal Rose' => "http://voyageatl.com/interview/meet-roosevelt-council-vandal-rose-west-atlanta/",
	'VoyageATL, 4/4/2018 - Meet Frankie Sinn in West Atlanta' => "http://voyageatl.com/interview/meet-frankie-sinn-frankie-sinn-west-atlanta/",
	'The Masquerade - Frankie Sinn' => "http://www.masqueradeatlanta.com/attraction/frankie-sinn/",
	'Creative Loafing - Esham, Frankie Sinn at The Masquerade' => "https://local.creativeloafing.com/event-303524-Esham,-Frankie-Sinn"
);	
$image_files = scan_photo_dir('../assets/frankie_sinn-img/');
$frankie_sinn = new Artist($name, $artist_type, $genres, $social_media, $bookings, $bio, $press_links, $image_files);
update_roster($frankie_sinn);
?>