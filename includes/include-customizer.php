<?php namespace WSUWP\Theme\WDS;


class Customizer {

	protected static $panel_id = 'wsu_wds_panel';


	public function __construct() {

		self::require_class( 'section' );
		self::require_class( 'section-wds-settings' );
		//self::require_class( 'section-global-header' );
		//self::require_class( 'section-global-footer' );
		//self::require_class( 'section-site-header' );
		//self::require_class( 'section-site-nav-vertical' );
		//self::require_class( 'section-site-footer' );
		//self::require_class( 'section-contact' );
		//self::require_class( 'section-social' );
		//self::require_class( 'section-content-hero' );
		//self::require_class( 'section-advanced' );

	}


	public static function init() {

		add_action( 'customize_register', __CLASS__ . '::add_customizer_options' );

	}


	public static function get( $property ) {

		switch ( $property ) {
			case 'panel_id':
				return self::$panel_id;
			default:
				return '';
		}
	} 


	protected static function require_class( $class_slug ) {

		require_once get_template_directory() . '/customizer/customizer-' . $class_slug . '.php';

	}


	public static function add_customizer_options( $wp_customize ) {

		self::require_class( 'control-html' );

		$wp_customize->add_panel(
			'wds',
			array(
				'priority'       => 10,
				'capability'     => 'edit_theme_options',
				'title'          => 'Web Design System',
				'description'    => 'Several settings pertaining my theme',
			)
		);

		$customizer_section_classes = array(
			'Customizer_WDS_Settings',
		);

		$theme_key    = Options::get( 'theme_key' );
		$settings_key = Options::get( 'settings_key' );

		foreach ( $customizer_section_classes as $slug ) {

			$section_class = __NAMESPACE__ . '\\' . $slug;

			if ( class_exists( $section_class ) ) {

				$section = new $section_class( $theme_key, $settings_key );
				$section->add_section( $wp_customize );

			} // End if
		}

	}

}

( new Customizer() )->init();
