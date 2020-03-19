<?php namespace WSUWP\Theme\WDS;


class Customizer {

	protected static $panel_id = 'wsu_wds_panel';


	public function __construct() {

		self::require_class( 'section' );
		self::require_class( 'section-global-header' );
		self::require_class( 'section-global-footer' );
		self::require_class( 'section-site-header' );
		self::require_class( 'section-site-nav-vertical' );
		self::require_class( 'section-site-footer' );
		self::require_class( 'section-contact' );
		self::require_class( 'section-social' );

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


	public static function require_class( $class_slug ) {

		require_once get_template_directory() . '/customizer/customizer-' . $class_slug . '.php';

	}


	public static function add_customizer_options( $wp_customize ) {

		self::require_class( 'control-html' );

		$wp_customize->add_panel(
			'components',
			array(
				'priority'       => 10,
				'capability'     => 'edit_theme_options',
				'title'          => 'Web Design System Components',
				'description'    => 'Several settings pertaining my theme',
			)
		);

		$wp_customize->add_panel(
			'site_info',
			array(
				'priority'       => 10,
				'capability'     => 'edit_theme_options',
				'title'          => 'Site Setup',
				'description'    => 'Several settings pertaining my theme',
			)
		);

		$customizer_section_classes = array(
			'Section_Contact',
			//'Section_Global_Header',
			//'Section_Global_Footer',
			//'Section_Site_Header',
			'Section_Site_Footer',
			'Section_Social',
			//'Section_Site_Nav_Vertical',
		);

		$theme_key    = Options::get( 'theme_key' );
		$settings_key = Options::get( 'settings_key' );

		foreach ( $customizer_section_classes as $section_class_slug ) {

			$section_class = __NAMESPACE__ . '\Customizer_' . $section_class_slug;

			if ( class_exists( $section_class ) ) {

				$section = new $section_class( $wp_customize, self::get( 'panel_id' ), $theme_key, $settings_key );
				$section->add_section();

			} // End if
		}

	}

}

( new Customizer() )->init();
