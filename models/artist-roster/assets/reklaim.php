<?php
//Authored by Jack Terrell
//Copyright StrongWares LLC and Etc. Management LLC 2019

//this file creates an Artist object for Zubah, emulating what the admin form will do

require_once '../php/Artist_class.php';
require_once '../php/roster_util.php';

$name = 'Reklaim';
$artist_type = array('Producer', 'DJ');
$genres = array('Dubstep', 'Riddim', 'Heavy Bass');
$social_media = array(
	'Soundcloud' => 'https://soundcloud.com/reklaimofficial',
	'Spotify' => 'https://open.spotify.com/artist/1caQnVNKAa9ovojDIt8I1w?si=a0E2V3nSQ6G-DUopm-JGgw',
	'Facebook' => 'https://www.facebook.com/reklaimofficial/',
	'Instagram' => 'https://www.instagram.com/reklaimofficial/',
	'Space Force EP' => 'https://soundcloud.com/reklaimofficial/sets/spaceforce-ep'
);
date_default_timezone_set('America/New_York');
$bookings = array(
	new Booking('Elektrik Light', $date=mktime(0, 0, 0, 10, 26, 2018), date('F j, Y', $date), 'Capt’n Funs Pensacola'),
	new Booking('Chop Shop', $date=mktime(0, 0, 0, 12, 12, 2018), date('F j, Y', $date), 'Believe Music Hall', 'Atlanta, GA'),
	new Booking('Nightmare Before Christmas', $date=mktime(0, 0, 0, 12, 28, 2018), date('F j, Y', $date), 'District'),
	new Booking('Iris NYE', $date=mktime(0, 0, 0, 12, 31, 2018), date('F j, Y', $date), 'Believe Music Hall', 'Atlanta, GA'),
	new Booking('The Experience', $date=mktime(0, 0, 0, 1, 11, 2019), date('F j, Y', $date), 'Noir Lounge', 'Atlanta, GA'),
	new Booking('Tukai Entertainment', $date=mktime(0, 0, 0, 1, 18, 2019), date('F j, Y', $date), 'Noir Lounge', 'Atlanta, GA'),
	new Booking('404 Day', $date = mktime(0, 0, 0, 4, 4, 2019), date('F j, Y', $date)),
	new Booking('Original Only Set', $date = mktime(0, 0, 0, 4, 0, 2019), date('F Y', $date), 'Music Room', 'Atlanta, GA'),
	new Booking('Glowrage', $date = mktime(0, 0, 0, 4, 13, 2019), date('F j, Y', $date), 'The Firmament', 'Greenville, SC'),
	new Booking('Headliner', $date = mktime(0, 0, 0, 4, 24, 2019), date('F j, Y', $date), 'Chill Lounge', 'Dothan, AL'),
);
$bio = 'INSERT REKLAIM BIO HERE';
$press_links = array (
	'The Charlotte Sessions, Atlanta Producers Put Together New SPACE FORCE EP - 9/25/2018' => "http://thecharlottesessions.com/space-force-ep-is-fire/",
	'Soundcloud, Interview in the description' => "https://soundcloud.com/prime-audio-1/zubah-ganons-minions-reklaim-rmx-prime-audio"
);	
$image_files = scan_photo_dir('../assets/reklaim-img/');
$reklaim = new Artist($name, $artist_type, $genres, $social_media, $bookings, $bio, $press_links, $image_files);
update_roster($reklaim);
echo "{$reklaim->getStr_name()} artist roster successfully updated.";
?>