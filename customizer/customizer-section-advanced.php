<?php namespace WSUWP\Theme\WDS;

class Customizer_Section_Advanced extends Customizer_Section {

	protected $section_title  = 'Advanced Options';
	protected $settings_group = 'site_setup';
	protected $key_base       = 'advanced';



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
			$this->get_setting_key( 'beta_mode' ),
			array(
				'default'     => 'off',
				'transport'   => 'refresh',
			)
		);


		$this->wp_customize->add_control(
			$this->get_control_key( 'beta_mode' ),
			array(
				'settings' => $this->get_setting_key( 'beta_mode' ),
				'label'    => 'Enable Beta Mode',
				'section'  => $this->get( 'section_id' ),
				'type'     => 'select',
				'choices'  => array(
					'off' => 'Off',
					'all' => 'All Visitors',
					'admin' => 'Logged in Users',
				),
			)
		);

	}

}
