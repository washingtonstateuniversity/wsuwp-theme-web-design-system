<?php namespace WSUWP\Theme\Binder;


class Theme {


	protected static $version = '0.1.0';
	protected static $options;


	public function __construct() {

		self::require_class( 'options' );

	}


	public function init() {

		add_action( 'init', __CLASS__ . '::setup_theme' );

	}


	public static function setup_theme() {

		self::$options = new Options();
		self::$options->set_options();

		if ( is_customize_preview() ) {

			add_action( 'wp_head', array( self::$options, 'set_options'), 1 );

		}

		require_once __DIR__ . '/include-menus.php';
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


	public static function get_component_option( $component, $property, $default = '' ) {

		return self::$options->get_option( 'components', $component, $property, $default );

	}

	public static function get_site_option( $group, $object, $property ) {

	}

}

(new Theme)->init();
