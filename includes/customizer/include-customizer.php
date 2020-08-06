<?php namespace WSUWP\Theme\WDS;


class Customizer {

	protected static $panel_id = 'wds';


	public static function get( $property ) {

		switch ( $property ) {
			case 'panel_id':
				return self::$panel_id;
			default:
				return '';
		}
	} 


	public function init() {

		require_once __DIR__ . '/include-customizer-section-wds-settings.php';
		require_once __DIR__ . '/include-customizer-section-wds-site-header.php';
		require_once __DIR__ . '/include-customizer-section-wds-site-nav-vertical.php';

		add_action( 'customize_register', __CLASS__ . '::add_customizer_options' );

	}


	public static function add_customizer_options( $wp_customize ) {

		$wp_customize->add_panel(
			self::get( 'panel_id' ),
			array(
				'priority'       => 10,
				'capability'     => 'edit_theme_options',
				'title'          => 'Web Design System',
				'description'    => 'Several settings pertaining my theme',
			)
		);

	}

}

( new Customizer() )->init();
