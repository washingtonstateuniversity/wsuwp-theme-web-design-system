<?php namespace WSUWP\Theme\WDS;


class Media {


	public function init() {

		add_action( 'init', __CLASS__ . '::set_img_sizes' );

	}


	public static function set_img_sizes() {

		// https://developer.wordpress.org/reference/hooks/big_image_size_threshold/
		add_filter( 'big_image_size_threshold', function( $size ) { return 1900; } );

	}

}

( new Media() )->init();
