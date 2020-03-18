<?php namespace WSUWP\Theme\WDS;


class Theme {


	protected static $version = '0.2.0';


	public static function get( $property ) {

		switch ( $property ) {
			case 'version':
				return self::$version;
			default:
				return '';
		}

	}


	public function __construct() {

	}


	public function init() {

		require_once __DIR__ . '/include-options.php';
		require_once __DIR__ . '/include-theme-config.php';
		require_once __DIR__ . '/include-menus.php';
		require_once __DIR__ . '/include-media.php';
		require_once __DIR__ . '/include-scripts.php';
		require_once __DIR__ . '/include-components.php';
		require_once __DIR__ . '/include-customizer.php';
		require_once __DIR__ . '/include-demo.php';

	}



	public static function get_version() {

		return self::$version;

	} // End get_version


	public static function require_class( $class_slug ) {

		require_once get_template_directory() . '/classes/class-' . $class_slug . '.php';

	}

}

(new Theme)->init();
