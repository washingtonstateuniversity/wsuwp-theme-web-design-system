<?php namespace WSUWP\Theme\WDS;


class Demo {


	public function __construct() {

	}


	public static function init() {

		add_action( 'customize_register', __CLASS__ . '::add_customizer_options' );

	}


	public static function add_customizer_options( $wp_customize ) {

		$wp_customize->add_setting(
			'wsu_wsd_demo[is_demo]',
			array(
				'default'     => 'off',
				'transport'   => 'refresh',
			)
		);

		$wp_customize->add_section(
			'wsu_wsd_demo_section',
			array(
				'title'      => 'Web Design System Demo',
				'priority'   => 5,
			)
		);

		$wp_customize->add_control(
			'wsu_wsd_demo_control',
			array(
				'settings' => 'wsu_wsd_demo[is_demo]',
				'label'    => 'Enable Demo Mode',
				'section'  => 'wsu_wsd_demo_section',
				'type'     => 'checkbox',
			)
		);
	}

}

( new Demo() )->init();
