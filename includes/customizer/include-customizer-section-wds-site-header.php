<?php namespace WSUWP\Theme\WDS;


class Customizer_Section_Site_Header {

	protected static $section_id = 'wds_site_header';


	public static function get( $property ) {

		switch ( $property ) {
			case 'section_id':
				return self::$section_id;
			default:
				return '';
		}
	} 


	public function init() {

		add_action( 'customize_register', array( __CLASS__, 'add_customizer_options' ) );

	}


	public static function add_customizer_options( $wp_customize ) {

		$wp_customize->add_section(
			self::get( 'section_id' ),
			array(
				'title'      => 'Site Header',
				'priority'   => 30,
				'panel'      => Customizer::get( 'panel_id' ),
			)
		);

		$wp_customize->add_setting(
			'wsu_wds_site_header_is_active',
			array(
				'default'     => true,
				'transport'   => 'refresh',
			)
		);

		$wp_customize->add_setting(
			'wsu_wds_site_header_on_home',
			array(
				'default'     => true,
				'transport'   => 'refresh',
			)
		);

		$wp_customize->add_control(
			'wsu_wds_site_header_is_active_control',
			array(
				'settings' => 'wsu_wds_site_header_is_active',
				'label'    => 'Show Site Header',
				'section'  => self::get( 'section_id' ),
				'type'     => 'checkbox',
			)
		);

		$wp_customize->add_control(
			'wsu_wds_site_header_on_home_control',
			array(
				'settings' => 'wsu_wds_site_header_on_home',
				'label'    => 'Show Site Header On Homepage',
				'section'  => self::get( 'section_id' ),
				'type'     => 'checkbox',
			)
		);

	}

}

( new Customizer_Section_Site_Header() )->init();
