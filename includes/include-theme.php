<?php namespace WSUWP\Theme\WDS;


class Theme {


	protected static $version = '0.14.3';


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
		require_once __DIR__ . '/customizer/include-customizer.php';
		require_once __DIR__ . '/include-sidebars.php';
		require_once __DIR__ . '/include-blocks.php';
		require_once __DIR__ . '/include-body-classes.php';
		require_once __DIR__ . '/include-rest-api.php';

	}



	public static function get_version() {

		return self::$version;

	} // End get_version


	public static function require_class( $class_slug ) {

		require_once get_template_directory() . '/classes/class-' . $class_slug . '.php';

	}

}

(new Theme)->init();
