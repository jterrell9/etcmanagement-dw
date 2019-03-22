<?php
//Authored By Jack Terrell
//Copyright StrongWares LLC and Etc. Management LLC 2019

require_once '../../models/artist-roster/php/Artist_class.php';
require_once '../../models/artist-roster/php/roster_util.php';

//utitlity functions

//this function returns an array of Artists of all the artists in roster
function getArtists_array() {
	$rosters = getRoster_filenames();
	$srtists = array();
	foreach($rosters as $roster) {
		$artists[] = deserialize_artist('../../models/artist-roster/assets/'.$roster);
	}
	return $artists;
}

//this function returns the artists' names from the roster
function getArtists_name() {
	
}

?>