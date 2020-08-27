<?php namespace WSUWP\Theme\WDS;


class Options {


	protected static $option_key = 'wsu_theme_options';


	public static function get( $property ) {

		switch ( $property ) {
			case 'option_key':
				return self::$option_key;
			default:
				return '';
		}
	}


	public function init() {

		// Do init Stuff here

	}


	public static function get_option( $option, $default = '' ) {

		$wsu_theme_options = get_option( self::$option_key, array() );

		if ( is_array( $wsu_theme_options ) && array_key_exists( $option, $wsu_theme_options ) ) {

			return $wsu_theme_options[ $option ];

		}

		return $default;

	}


}

( new Options )->init();
