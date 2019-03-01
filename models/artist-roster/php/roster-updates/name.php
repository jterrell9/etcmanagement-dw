<?php
//update name in roster from form
if(isset($_POST['artist-name']) and isset($artist) and isset($roster_filename) and isset($images_dir)){
	$new_name = filter_input(INPUT_POST, 'artist-name');
	$artist->name = $new_name;
	update_roster($artist);
}
?>