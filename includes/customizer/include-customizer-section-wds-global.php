<?php namespace WSUWP\Theme\WDS;


class Customizer_Section_Global {

	protected static $section_id = 'wds_global';

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
				'title'      => 'Global Header & Footer',
				'priority'   => 30,
				'panel'      => Customizer::get( 'panel_id' ),
			)
		);

		$wp_customize->add_setting(
			Options::get( 'option_key' ) . '[wsu_wds_global_header_give]',
			array(
				'default'     => '',
				'transport'   => 'refresh',
				'type'        => 'option',
			)
		);

		$wp_customize->add_control(
			'wsu_wds_global_header_give_control',
			array(
				'settings' =>  Options::get( 'option_key' ) . '[wsu_wds_global_header_give]',
				'label'    => 'Give URL',
				'section'  => self::get( 'section_id' ),
				'type'     => 'text',
			)
		);

	}

}

( new Customizer_Section_Global() )->init();
