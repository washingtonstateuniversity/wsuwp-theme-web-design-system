<?php namespace WSUWP\Theme\WDS;

class Customizer_Section_Site_Header extends Customizer_Section {

	protected $section_title  = 'Site Header';
	protected $key_base       = 'site_header';
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
			$this->get_setting_key( 'is_active' ),
			array(
				'default'     => true,
				'transport'   => 'refresh',
			)
		);

		$this->wp_customize->add_setting(
			$this->get_setting_key( 'show_on_home' ),
			array(
				'default'     => true,
				'transport'   => 'refresh',
			)
		);


		$this->wp_customize->add_control(
			$this->get_control_key( 'is_active' ),
			array(
				'settings' => $this->get_setting_key( 'is_active' ),
				'label'    => 'Show Site Header',
				'section'  => $this->get( 'section_id' ),
				'type'     => 'checkbox',
			)
		);

		$this->wp_customize->add_control(
			$this->get_control_key( 'show_on_home' ),
			array(
				'settings' => $this->get_setting_key( 'show_on_home' ),
				'label'    => 'Show on Home Page',
				'section'  => $this->get( 'section_id' ),
				'type'     => 'checkbox',
			)
		);

	}

}
