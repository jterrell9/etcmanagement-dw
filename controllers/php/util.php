<!--Authored By Jack Terrell-->
<!--Copyright StrongWares LLC and Etc. Management LLC 2019-->

<?php

function scan_photo_dir($path) {
	$files = scandir($path);
	$photoCount = count($directories);
	$photoIndex = 2;
	$photos = array();
	while ($photoIndex < $photoCount) {
		if(substr($files[$photoIndex], -4) === '.jpg' || 
		   substr($files[$photoIndex], -5) === '.jpeg' || 
		   substr($files[$photoIndex], -4) === '.bmp' || 
		   substr($files[$photoIndex], -4) === '.gif' || 
		   substr($files[$photoIndex], -4) === '.ico' || 
		   substr($files[$photoIndex], -4) === '.png' || 
		   substr($files[$photoIndex], -4) === '.svg' || 
		   substr($files[$photoIndex], -5) === '.tiff' || 
		   substr($files[$photoIndex], -4) === '.tif') {
			$photos[] = $files[$photoIndex];
		}
		$photoIndex++;
	}
	return $photos;
}

?>