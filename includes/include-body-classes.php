<?php namespace WSUWP\Theme\WDS;


class Body_Classes {

	protected static $classes = array();

	public static function get( $property ) {

		switch ( $property ) {
			case 'classes':
				return self::$classes;
			default:
				return '';
		}

	} 

	public function __construct() {

		self::add_classes();

	}

	public function init() {

		add_filter( 'body_class', array( __CLASS__, 'filter_classes' ) );

	}

	public static function filter_classes($classes) {

			$merged_classes = array_merge($classes, self::get('classes'));

			return $merged_classes;

	}

	public static function add_class($new_class) {
		
		$classes = self::get('classes');

		array_push($classes, $new_class);

		self::$classes = $classes;

	}

	public static function add_classes() {

		// For instance, check a theme_mod and add a class!
		// if ( get_theme_mod('wsu_wds_site_content_is_full_width', false) ) {

		// 	self::add_class('wsu-c-content-width--full');

		// }

		// Add future checks here ...

	}

}

( new Body_Classes() )->init();
