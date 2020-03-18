<?php namespace WSUWP\Theme\WDS;

class Customizer_Section_Site_Header {

	protected $section_id = 'wsu_section_wsd_component_site_header';
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
			'wsu_theme[wds][site_header][is_active]',
			array(
				'default'     => 'off',
				'transport'   => 'refresh',
			)
		);

		$this->wp_customize->add_section(
			$this->get( 'section_id' ),
			array(
				'title'      => 'Site Header',
				'priority'   => 30,
				'panel'      => $this->panel_id,
			)
		);

		$this->wp_customize->add_control(
			'wsu_theme_wds_show_site_header_control',
			array(
				'settings' => 'wsu_theme[wds][site_header][is_active]',
				'label'    => 'Show Site Header',
				'section'  => $this->get( 'section_id' ),
				'type'     => 'checkbox',
			)
		);

	}

}
