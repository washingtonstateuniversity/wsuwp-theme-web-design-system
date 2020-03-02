<?php namespace WSUWP\Theme\WDS;


class Customizer {

	protected static $panel_id = 'wsu_wds_panel';


	public function __construct() {

		Theme::require_class( 'customizer-section-global-header' );
		Theme::require_class( 'customizer-section-global-footer' );
		Theme::require_class( 'customizer-section-site-header' );
		Theme::require_class( 'customizer-section-site-nav-vertical' );

	}


	public static function init() {

		add_action( 'customize_register', __CLASS__ . '::add_customizer_options' );

	}


	public static function add_customizer_options( $wp_customize ) {

		$wp_customize->add_panel(
			self::$panel_id,
			array(
				'priority'       => 10,
				'capability'     => 'edit_theme_options',
				'title'          => 'Web Design System Options',
				'description'    => 'Several settings pertaining my theme',
			)
		);

		$globl_header_section = new Customizer_Section_Global_Header( $wp_customize, self::$panel_id );
		$globl_header_section->add_section();

		$globl_footer_section = new Customizer_Section_Global_Footer( $wp_customize, self::$panel_id );
		$globl_footer_section->add_section();

		$site_header_section = new Customizer_Section_Site_Header( $wp_customize, self::$panel_id );
		$site_header_section->add_section();

		$site_nav_vertical_section = new Customizer_Section_Site_Nav_Vertical( $wp_customize, self::$panel_id );
		$site_nav_vertical_section->add_section();

	}

}

( new Customizer() )->init();
