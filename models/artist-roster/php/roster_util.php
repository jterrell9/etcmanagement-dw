<?php
//Authored by Jack Terrell
//Copyright StrongWares LLC and Etc. Management LLC 2019

//contains functions that provide utilities to work with artist roster

require_once 'Artist_class.php';

//function that updates the roster file
//@param $artist: Artist object representing artist
function update_roster($artist) {
	if(!($artist instanceof Artist)) {
		throw new BadMethodCallException('Argument passed is wrong type, must be instance of Artist class.');
	}
	$filename = get_roster_filename($artist->getStr_name());
	persist_artist($artist, $filename);
}

//this function returns an array of Artists of all the artists in roster
function getArtists_array() {
	$rosters = getRoster_filenames();
	$srtists = array();
	foreach($rosters as $roster) {
		$artists[] = deserialize_artist('../assets/'.$roster);
	}
	return $artists;
}

//this function returns the filename of the roster file
//@param $artist_name: artist name string
function get_roster_filename($artist_name) {
	return strtolower(str_replace(' ', '_', $artist_name)).'.roster';
}

//function returns name of image directory
//@param $artist_name: name of artist string
function get_image_dir_name($artist_name) {
	return strtolower(str_replace(' ', '_', $artist_name)).'-img';
}

//function that scans directory for image files
//@param $path: path to img directory
//returns: array of filenames of photo files in path
function scan_photo_dir($path) {
	$files = scandir($path);
	if($files){
		$photos = array();
		for($i=2; $i < count($files); $i++) {
			if(substr(strtolower($files[$i]), -4) === '.jpg' or 
			   substr(strtolower($files[$i]), -5) === '.jpeg' or 
			   substr(strtolower($files[$i]), -4) === '.bmp' or 
			   substr(strtolower($files[$i]), -4) === '.gif' or 
			   substr(strtolower($files[$i]), -4) === '.ico' or 
			   substr(strtolower($files[$i]), -4) === '.png' or 
			   substr(strtolower($files[$i]), -4) === '.svg' or 
			   substr(strtolower($files[$i]), -5) === '.tiff' or 
			   substr(strtolower($files[$i]), -4) === '.tif' or
			   substr(strtolower($files[$i]), -4) === '.pdf') {
				$photos[] = $files[$i];
			}
		}
	}
	return $photos;
}

//function that returns array of .roster files present
function getRoster_filenames() {
	$files = scandir('assets/');
	if($files) {
		$roster = array();
		for($i=2; $i < count($files); $i++) {
			if(substr(strtolower($files[$i]), -7) === '.roster') {
				$roster[] = $files[$i];
			}
		}
	}
	return $roster;
}

//function create persistent file representing artists in the roster
//@pparam $artist: Artist class instance
//@param $file_name: string containing the filename and path of the roster file to be created
function persist_artist($artist, $file_name) {
	if(!($artist instanceof Artist)){
		throw Exception("Could not serialize artist, incorrect class type.");
	}
	$serilized_data = serialize($artist);
	$roster_file = fopen($file_name, "w") or die('unable to open file');
	fwrite($roster_file, $serilized_data);
	fclose($roster_file);
}

//function deserializes the persisted file in the artist roster and returns an Artist object
//@param $file_name: string containing the filename and path of the roster file to be deserialized
function deserialize_artist($file_name) {
	$persistent_file = fopen($file_name, "r") or die("Unable to open file.");
	$serialize_data = fread($persistent_file, filesize($file_name));
	fclose($persistent_file);
	$artist = unserialize($serialize_data);
	return $artist;
}