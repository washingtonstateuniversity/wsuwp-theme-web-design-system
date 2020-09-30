<?php namespace WSUWP\Theme\WDS;


class Options {


	protected static $option_key = 'wsu_site_option';


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

		$wsu_site_options = get_option( self::$option_key, array() );

		if ( is_array( $wsu_site_options ) && array_key_exists( $option, $wsu_site_options ) ) {

			return $wsu_site_options[ $option ];

		}

		return $default;

	}


}

( new Options )->init();
