<?php
//Authored By Jack Terrell
//Copyright StrongWares LLC and Etc. Management LLC 2019

//utitlity functions

//function that scans directory for image files
//@param $path: path to img directory
//returns: array of filenames of photo files in path
function scan_photo_dir($path) {
	$files = scandir($path);
	if($files){
		$photoCount = count($files);
		$photos = array();
		for($i=2; $i < $photoCount; $i++) {
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

?>