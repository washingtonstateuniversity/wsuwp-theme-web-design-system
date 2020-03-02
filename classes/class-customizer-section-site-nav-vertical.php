<?php namespace WSUWP\Theme\WDS;

class Customizer_Section_Site_Nav_Vertical {

	protected $section_id = 'wsu_wsd_theme_option_components_site_nav_vertical';
	protected $wp_customize;
	protected $panel_id;


	public function __construct( $wp_customize, $panel_id ) {

		$this->wp_customize = $wp_customize;
		$this->panel_id = $panel_id;

	}


	public function get( $property ) {

		switch ( $property ) {

			case 'section_id':
				return $this->section_id;
			case 'panel_id':
				return $this->panel_id;
			default:
				return '';
		}

	}


	public function add_section() {

		$this->wp_customize->add_setting(
			'wsu_wsd_theme_option[components][site_nav_vertical][is_active]',
			array(
				'default'     => 'off',
				'transport'   => 'refresh',
			)
		);

		$this->wp_customize->add_section(
			$this->get( 'section_id' ),
			array(
				'title'      => 'Vertical Navigation',
				'priority'   => 30,
				'panel'      => $this->panel_id,
			)
		);

		$this->wp_customize->add_control(
			'wsu_wsd_theme_option_components_site_nav_vertical_is_active_control',
			array(
				'settings' => 'wsu_wsd_theme_option[components][site_nav_vertical][is_active]',
				'label'    => 'Show Vertical Nav',
				'section'  => $this->get( 'section_id' ),
				'type'     => 'checkbox',
			)
		);

	}

}
