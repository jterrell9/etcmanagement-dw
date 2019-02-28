<?php
//Authored by Jack Terrell
//Copyright StrongWares LLC and Etc. Management LLC 2019

include 'Artist_class.php';

//function create persistent file representing artists in the roster
//@pparam $artist: Artist class instance
//@param $file_name: string containing the filename and path of the roster file to be created
function persist_artist($artist, $file_name) {
	if(!($artist instanceof Artist)){
		throw Exception("Could not serialize artist, incorrect class type.");
	}
	$serilized_data = serialize($artist);
	$roster_file = fopen($file_name) or die("Unable to open file.");
	fwrite($roster_file, $serilized_data);
	fclose($roster_file);
}

//function deserializes the persisted file in the artist roster and returns an Artist object
//@param $file_name: string containing the filename and path of the roster file to be deserialized
function deserialize_artist($file_name) {
	$persistent_file = fopen($file_name, "r") or die("Unable to open file.");
	$serialize_data = fread($persistent_file, filesize($persistent_file));
	fclose($persistent_file);
	$artist = new Artist;
	$artist = unserialize($serialize_data);
	return $artist;
}