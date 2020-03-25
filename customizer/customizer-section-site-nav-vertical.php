<?php namespace WSUWP\Theme\WDS;

class Customizer_Section_Site_Nav_Vertical extends Customizer_Section {

	protected $section_title  = 'Site Nav Vertical';
	protected $key_base       = 'site_nav_vertical';
	protected $settings_group = 'components';


	public function add_section() {

		$this->wp_customize->add_section(
			$this->get( 'section_id' ),
			array(
				'title'      => $this->get( 'section_title' ),
				'priority'   => 30,
				'panel'      => $this->get( 'settings_group' ),
			)
		);

		$this->wp_customize->add_setting(
			$this->get_setting_key( 'start_open' ),
			array(
				'default'     => true,
				'transport'   => 'refresh',
			)
		);


		$this->wp_customize->add_control(
			$this->get_control_key( 'start_open' ),
			array(
				'settings' => $this->get_setting_key( 'start_open' ),
				'label'    => 'Start Open',
				'section'  => $this->get( 'section_id' ),
				'type'     => 'checkbox',
			)
		);

	}

}

