<?php namespace WSUWP\Theme\WDS;


class Customizer_Section_WDS_Settings {

	protected static $section_id = 'wds_settings';


	public static function get( $property ) {

		switch ( $property ) {
			case 'section_id':
				return self::$section_id;
			default:
				return '';
		}
	} 


	public function init() {

		add_action( 'customize_register', __CLASS__ . '::add_customizer_options' );

	}


	public static function add_customizer_options( $wp_customize ) {

		$wp_customize->add_section(
			self::get( 'section_id' ),
			array(
				'title'      => 'Advanced Settings',
				'priority'   => 30,
				'panel'      => Customizer::get( 'panel_id' ),
			)
		);

		$wp_customize->add_setting(
			'wsu_wds_settings_version',
			array(
				'default'     => '',
				'transport'   => 'refresh',
			)
		);

		$wp_customize->add_control(
			'wsu_wds_settings_version_control',
			array(
				'settings' => 'wsu_wds_settings_version',
				'label'    => 'WDS Version',
				'section'  => self::get( 'section_id' ),
				'type'     => 'text',
			)
		);

	}

}

( new Customizer_Section_WDS_Settings() )->init();
