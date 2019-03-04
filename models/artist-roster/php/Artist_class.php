<?php
//Authored by Jack Terrell
//Copyright StrongWares LLC and Etc. Management LLC 2019

//This class is the abstraction to create Artists for the artist roster of the website
class Artist {
	public $name;
	public $artist_type;
	public $genres;
	public $social_media;
	public $bookings;
	public $bio;
	public $press_links;
 	public $image_files;
	
	public function __construct($name, $artist_type, $genres, $social_media, $bookings, $bio, $press_links, $image_files) {
		$this->name = $name;
		$this->artist_type = $artist_type;
		$this->genres = $genres;
		$this->social_media = $social_media;
		$this->bookings = $bookings;
		$this->bio = $bio;
		$this->press_links = $press_links;
		$this->image_files = $image_files;
	}
	
	//function returns name string
	public function getStr_name() {
		if(!isset($this->name)) {
			return NULL;
		}
		return $this->name;
	}
	
	//function returns artist_type array as a formatted fence-posted string
	public function getStr_artist_type() {
		if(!isset($this->artist_type) or count($this->artist_type) < 1) {
			return NULL;
		}
		$str = '';
		foreach($this->artist_type as $type) {
			$str .= ' | '.$type;
		}
		return $str.' |';
	}
	
	//function returns genres array as a formatted fence-posted string
	public function getStr_genres() {
		if(!isset($this->genres) or count($this->genres) < 1) {
			return NULL;
		}
		$str = '';
		foreach($this->genres as $genre) {
			$str .= '| '.$genre.' ';
		}
		return $str . '|';
	}
	
	//function returns social_media array as a formatted string
	public function getStr_social_media() {
		if(!isset($this->social_media) or count($this->social_media) < 1) {
			return NULL;
		}
		$str = '';
		foreach($this->social_media as $website=>$url) {
			$str .= "{$website}: {$url}"."\r\n";
		}
		return $str;
	}
	
	//function returns social_media array formatted as HTML list of links
	public function getHTML_social_media() {
		if(!isset($this->social_media) or count($this->social_media) < 1) {
			return NULL;
		}
		$html = "\r\n".'<ul>'."\r\n";
		foreach($this->social_media as $website=>$url) {
			$html .= "\t<li><a href=\"{$url}\" target=\"_blank\">{$website}</a></li>\r\n";
		}
		return $html.'</ul>'."\r\n";
	}
	
	//function returns bookings array formatted as HTML list, seperated by past and future events
	public function getHTML_bookings() {
		if(!isset($this->bookings) or count($this->bookings) < 1) {
			return NULL;
		}
		$html = "<h3>Recent Bookings:</h3>\r\n".
			"<ul>\r\n";
		foreach($this->bookings as $booking) {
			if($booking->isPast()) {
				$html .= "\t<li>".$booking->print_booking()."</li>"."\r\n";
			}
		}
		$html .= "</ul>"."\r\n".
			"<h3>Future Bookings:</h3>"."\r\n".
			"<ul>\r\n";
		foreach($this->bookings as $booking) {
			if(!($booking->isPast())) {
				$html .= "\t<li>".$booking->print_booking()."</li>"."\r\n";
			}
		}
		return $html."</ul>\r\n";
	}
	
	//function returns bio string
	public function getStr_bio() {
		if(!isset($this->bio)) {
			return NULL;
		}
		return $this->bio;
	}
	
	//function returns a html list of press_links
	public function getHTML_press_links() {
		if(!isset($this->press_links) or count($this->press_links) < 1) {
			return NULL;
		}
		$html = '<ul>'."\r\n";
		foreach($this->press_links as $title=>$press_link) {
			$html .= "\t<li><a href=\"{$press_link}\" target=\"_blank\">{$title}</a></li>\r\n";
		}
		return $html."</ul>\r\n";
	}
	
	//function to display artist images
	public function getHTML_image_files($rel_path) {
		if(!isset($this->image_files) or count($this->image_files) < 1) {
			return NULL;
		}
		$html = '<div style="display: inline-block; width: 100%;">'."\r\n";
		foreach($this->image_files as $imgFile) {
			if(substr(strtolower($imgFile), -4) === '.pdf'){
				$html .= "\t<p>click to download: <a href=\"{$rel_path}{$imgFile}\" target=\"_blank\">{$imgFile}</a></p><br />\r\n";
				continue;
			}
			$html .= "\t<p>{$imgFile}</p>\r\n".
				"\t<img src=\"{$rel_path}{$imgFile}\" alt=\"{$imgFile}\" style=\"width: 100%;\" />\r\n";
		}
		return $html.'</div>'."\r\n";
	}
}

//class for creating bookings associated with artists
class Booking {
	public $event_name;
	public $event_date;
	public $formatted_date;
	public $venue;
	public $extra_info;
	public $upcoming;
	
	public function __construct($event_name, $event_date, $formatted_date, $venue=NULL, $extra_info=NULL) {
		$this->event_name = $event_name;
		$this->event_date = $event_date;
		$this->formatted_date = $formatted_date;
		$this->venue = $venue;
		$this->extra_info = $extra_info;
		$this->upcoming = $upcoming;
	}
	
	//function returns a formatted string for a booking
	public function print_booking() {
		$booking_str = '';
		if(isset($this->event_name)) {
			$booking_str .= $this->event_name;
		}
		if(isset($this->venue)) {
			$booking_str .= ' | '.$this->venue;
		}
		if(isset($this->event_date) and isset($this->formatted_date)) {
			$booking_str .= ' | '.$this->formatted_date;
		}
		if(isset($this->extra_info)) {
			$booking_str .= ' | '.$this->extra_info;
		}
		return $booking_str.' |';
	}
	
	//function tests and returns boolean describing whether booking is past or future
	public function isPast() {
		date_default_timezone_set('America/New_York');
		$now = time();
		$booking_date = date(DATE_ATOM, $this->event_date);
		if(strtotime($booking_date) < $now){
			return true;
		}
		return false;
	}
}

//class to describe image files
class Image {
	public $alt;
	public $src;
	
	public function __construct($alt, $src) {
		$this->alt = $alt;
		$this->src = $src;
	}
	
	//function that returns img tag html
	public function getHTML() {
		return '<img src="'.$this->src.'" alt="'.$this->alt.'" />';
	}
}

?>