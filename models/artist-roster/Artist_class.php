<!--Authored by Jack Terrell-->
<!--Copyright StrongWares LLC and Etc. Management LLC 2019-->

This class 

<?php

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
		$booking_str = $this->event_name.'|'.$this->venue;
		if($this->event_date != NULL) {
			$booking_str .= '|'.$this->event_date;
		}
		if($this->extra_info != NULL) {
			$booking_str .= '|'.$this->extra_info;
		}
		return $booking_str;
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