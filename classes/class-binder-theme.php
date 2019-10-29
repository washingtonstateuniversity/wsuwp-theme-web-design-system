<?php namespace WSUWP\Theme\Binder;

class Binder_Theme {

	protected static $theme_dir;
	
	protected static $theme_url;

	protected static $theme_version = '0.0.0';

	public function __construct() {

		self::$theme_dir = plugin_dir_path( dirname( __FILE__ ) );
		
		self::$theme_url = plugin_dir_url( dirname( __FILE__ ) );

	} // End __construct

	public static function get_theme_dir() {
		return self::theme_dir;
	}

	public static function get_theme_url() {
		return self::$theme_url;
	}

	public static function get_theme_version() {
		return self::$theme_version;
	}

	public function setup_theme() {

	}

}
