<?php
//Authored by Jack Terrell
//Copyright StrongWares LLC and Etc. Management LLC 2019

//this file creates an Artist object for Zubah, emulating what the admin form will do

require_once '../php/Artist_class.php';
require_once '../php/roster_util.php';

$name = 'Zubah';
$artist_type = array('Producer', 'DJ');
$genres = array('Dubstep', 'Riddim', 'Heavy Bass', 'Hip Hop');
$social_media = array(
	'Soundcloud' => 'https://soundcloud.com/dj-zubah',
	'Spotify' => 'https://open.spotify.com/artist/2U4IvX2EBvfFfSTTajnxEE',
	'Facebook' => 'https://www.facebook.com/zubahatl/',
	'Instagram' => 'https://www.instagram.com/zubahatl/',
	'Bowser Blockz (31k Plays)' => 'https://soundcloud.com/dj-zubah/zubah-bowserblockz-dub',
	'Zubah In Montreal' => 'https://www.facebook.com/zubahatl/videos/565511913850271/',
	'Squnto\'s Mega Chop' => 'https://www.facebook.com/squnto/videos/2166927823521820/',
	'Space Force EP' => 'https://soundcloud.com/reklaimofficial/sets/spaceforce-ep'
);
date_default_timezone_set('America/New_York');
$bookings = array(
	new Booking('Headlined Alpha Squadron\'s Bass Show', $date = mktime(0, 0, 0, 1, 0, 2019), date('F, Y', $date), 'Toronto, Canada'),
	new Booking('Direct Support for Squnto', $date = mktime(0, 0, 0, 12, 0, 2018), date('F, Y', $date), 'Terminal West'),
	new Booking('Iris Presents', $date = mktime(0, 0, 0, 1, 0, 2019), date('F Y', $date), 'Believe Music Hall'),
	new Booking('Liquified Presents', $date = mktime(0, 0, 0, 2, 22, 2019), date('F j, Y', $date), 'District'),
	new Booking('All Originals', $date = mktime(0, 0, 0, 2, 26, 2019), date('F j, Y', $date), 'Music Room')
);
$bio = 'INSERT ZUBAH BIO HERE';
$press_links = array (
	'The QR Network, 10/22/2018' => "https://www.theqrnetwork.com/interviews/zubah",
	'The Masquerade - Zubah' => "http://www.masqueradeatlanta.com/attraction/zubah/",
	'Best Things in Georgia - Squnto and Zubah' => "https://bestthingsga.com/event/squnto-and-zubah-2018-11-08-jb-atlanta-ga.html"
);	
$image_files = scan_photo_dir('../assets/zubah-img/');
$zubah = new Artist($name, $artist_type, $genres, $social_media, $bookings, $bio, $press_links, $image_files);
update_roster($zubah);
echo "{$zubah->getStr_name()} artist roster successfully updated.";
?>