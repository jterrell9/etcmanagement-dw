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
 	public $image_files;
	public $press_links;
	
	public function __construct($name,$artist_type,$genres,$social_media,$bookings,$bio,$image_files,$press_links) {
		$this->name = $name;
		$this->artist_type = $artist_type;
		$this->genres = $genres;
		$this->social_media = $social_media;
		$this->bookings = $bookings;
		$this->bio = $bio;
		$this->image_files = $image_files;
		$this->press_links = $press_links;
	}
	
	public function printStr_name() {
		if(!isset($this->name)) {
			return NULL;
		}
		return $this->name;
	}
	
	public function printStr_artist_type() {
		if(!isset($this->artist_type) or count($this->artist_type) < 1) {
			return NULL;
		}
		$str = '';
		foreach($this->artist_type as $type) {
			$str .= ' | '.$type;
		}
		return $str.' |';
	}
	
	public function printStr_genres() {
		if(!isset($this->genres) or count($this->genres) < 1) {
			return NULL;
		}
		$str = '';
		foreach($this->genres as $genre) {
			$str .= '| '.$genre.' ';
		}
		return $str . '|';
	}
	
	public function printStr_social_media() {
		if(!isset($this->social_media) or count($this->social_media) < 1) {
			return NULL;
		}
		$str = '';
		foreach($this->social_media as $website => $url) {
			$str .= "{$website}: {$url}"."\r\n";
		}
		return $str;
	}
	
	public function printHTML_social_media() {
		
	}
	
}

class Booking {
	public $event_name;
	public $event_date;
	public $venue;
	public $extra_info;
	public $upcoming;
	
	public function __construct($event_name, $event_date, $venue, $extra_info=NULL, $upcoming=false) {
		$this->event_name = $event_name;
		$this->event_date = $event_date;
		$this->venue = $venue;
		$this->extra_info = $extra_info;
		$this->upcoming = $upcoming;
	}
	
	public function print_booking() {
		$booking_str = '';
		if(isset($this->event_name) and isset($this->venue)){
			$booking_str .= $this->event_name.' | '.$this->venue;
		}
		if(isset($this->event_date)) {
			$booking_str .= ' | '.$this->event_date;
		}
		if(isset($this->extra_info)) {
			$booking_str .= ' | '.$this->extra_info;
		}
		return $booking_str.' |';
	}
}

Class Image {
	public $alt;
	public $src;
	
	public function __construct($alt, $src) {
		$this->alt = $alt;
		$this->src = $src;
	}
	
	public function getHTML() {
		return '<img src="'.$this->src.'" alt="'.$this->alt.'" />';
	}
}

?>