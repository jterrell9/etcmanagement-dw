<!--Authored by Jack Terrell-->
<!--Copyright StrongWares LLC and Etc. Management LLC 2019-->

<?php

require '../../../../controllers/php/util.php';
require '../../Artist_class.php';

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
$bookings = array(
	new Booking('Slander (MC)', date('F, Y', mktime(0, 0, 0, 10, 0, 2018)), 'Buckhead Theater'),
	new Booking('Ray Vlope (MC)', date('F, Y', mktime(0, 0, 0, 11, 0, 2018)), 'Opera Atlanta'),
	new Booking('Squnto (MC)', date('F, Y', mktime(0, 0, 0, 12, 0, 2018)), 'Terminal West'),
	new Booking('Shaky Beats', date('Y', mktime(0, 0, 0, 0, 0, 2018)), 'Piedmont Stage'),
	new Booking('Going Up', date('F j, Y', mktime(0, 0, 0, 2, 26, 2019)), 'Music Room'),
	new Booking('Iris Presents', date('l', mktime(0, 0, 0, 12, 29, 2019)), 'Believe Music Hall', 'Resident MC', true),
	new Booking('404 Day', date('F j, Y', mktime(0, 0, 0, 4, 4, 2019)), '', NULL, true)
);
$bio = 'INSERT FRANKIE SINN BIO HERE';
$image_files = scan_photo_dir('./img/');
echo print_r($image_files);
$press_links = array(
	"https://creativeloafing.com/content-168415-Ricky-Raw's-bass-music-top-5",
	"http://voyageatl.com/interview/meet-roosevelt-council-vandal-rose-west-atlanta/",
	"http://voyageatl.com/interview/meet-frankie-sinn-frankie-sinn-west-atlanta/",
	"http://www.masqueradeatlanta.com/attraction/frankie-sinn/",
	"https://local.creativeloafing.com/event-303524-Esham,-Frankie-Sinn"
);
$frankie_sinn = new Artist($name, $artist_type, $genres, $social_media, $bookings, $bio, $image_files, $press_links);

echo "name: {$name}"."\r\n";
echo "artist type:"


?>