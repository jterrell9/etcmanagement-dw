<?php
//Authored by Jack Terrell
//Copyright StrongWares LLC and Etc. Management LLC 2019

//this file creates an Artist object for Zubah, emulating what the admin form will do

require_once '../php/Artist_class.php';
require_once '../php/roster_util.php';

$name = 'Archmage';
$artist_type = array('Producer', 'DJ');
$genres = array('Dubstep', 'Riddim', 'Heavy Bass', 'Drum & Bass / Electro House');
$social_media = array(
	'Soundcloud' => 'http://www.soundcloud.com/archmagemusic',
	'Spotify' => 'https://open.spotify.com/artist/2RyZr44n3kh6a6yXrnbZqO',
	'Facebook' => 'https://www.facebook.com/pg/ArchmageMusic',
	'Instagram' => 'https://www.instagram.com/archmage_music/',
	'Space Force EP' => 'https://soundcloud.com/reklaimofficial/sets/spaceforce-ep'
);
date_default_timezone_set('America/New_York');
$bookings = array(
	new Booking('Imagine Music Festival', $date = mktime(0, 0, 0, 1, 1, 2018), date('Y', $date), 'Atlanta, GA'),
	new Booking('Co-headlined Chop Shop', $date = mktime(0, 0, 0, 1, 1, 2019), date('Y', $date), 'Believe Music Hall'),
	new Booking('The Experience', $date = mktime(0, 0, 0, 1, 1, 2019), date('Y', $date)),
	new Booking('Iris Wish Lounge', $date = mktime(0, 0, 0, 11, 1, 2018), date('F, Y', $date), 'Believe Music Hall', 'w/ Adventure Club'),
	new Booking('Direct Support Ray Vlope Twice', $date = mktime(0, 0, 0, 1, 1, 2018), date('Y', $date)),
	new Booking('Bear Grillz', $date = mktime(0, 0, 0, 1, 1, 2018), date('Y', $date), 'The Music Room', 'Charleston, SC'),
	new Booking('Torch', $date = mktime(0, 0, 0, 4, 1, 2019), date('F, Y', $date)),
	new Booking('404 Day', $date = mktime(0, 0, 0, 4, 4, 2019), date('F j, Y', $date)),
	new Booking('Headlining for Tukai Entertainment', $date = mktime(0, 0, 0, 4, 1, 2019), date('F, Y', $date)),
	new Booking('Forest Electronic Music & Arts Camping Festival', $date = mktime(0, 0, 0, 6, 1, 2019), date('', $date), 'Lights', 'June 1 to June 2, 2019')
);
$bio = 'INSERT ARCHMAGE BIO HERE';
$press_links = array (
	'Atlanta’s Favorite Dubstep DJ, Archmage, Drops New EP, SpaceForce - 9/14/2018' => "https://sixfeathers.com/atlantas-favorite-dubstep-dj-archmage-drops-new-ep-spaceforce/",
	'Interview with The Dark Lord of Bass: Archmage - 6/22/2018' => "https://www.theqrnetwork.com/interviews/archmage",
	'Atlanta Producers Put Together New SPACE FORCE EP - 9/25/2018' => "http://thecharlottesessions.com/space-force-ep-is-fire/?fbclid=IwAR3yr2hc4te6gpIgKC-B01osjY9mYMP0DsCDl3MTSA0hT8OBPwESbk74R7M"
);	
$image_files = scan_photo_dir('../assets/archmage-img/');
$archmage = new Artist($name, $artist_type, $genres, $social_media, $bookings, $bio, $press_links, $image_files);
update_roster($archmage);
echo "{$archmage->getStr_name()} artist roster successfully updated.";
?>