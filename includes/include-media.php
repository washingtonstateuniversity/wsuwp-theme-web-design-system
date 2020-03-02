<?php namespace WSUWP\Theme\WDS;


class Media {


	public function init() {

		add_filter( 'big_image_size_threshold', __CLASS__ . '::set_max_image_size' );

	}


	// https://developer.wordpress.org/reference/hooks/big_image_size_threshold/
	public static function set_max_image_size( $threshold ) {

		// Set default image threshold down from 2560 to 1900px
		$threshold = 1900;

		return $threshold;

	}

}

( new Menus() )->init();
