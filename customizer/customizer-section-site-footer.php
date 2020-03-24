<?php namespace WSUWP\Theme\WDS;

class Customizer_Section_Site_Footer extends Customizer_Section  {

	protected $section_title = 'Site Footer';
	protected $key_base      = 'site_footer';
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
			$this->get_setting_key( 'footer_title' ),
			array(
				'default'     => '',
				'transport'   => 'refresh',
			)
		);

		$this->wp_customize->add_setting(
			$this->get_setting_key( 'footer_caption' ),
			array(
				'default'     => '',
				'transport'   => 'refresh',
			)
		);

		$this->wp_customize->add_setting(
			$this->get_setting_key( 'show_social' ),
			array(
				'default'     => true,
				'transport'   => 'refresh',
			)
		);

		$this->wp_customize->add_control(
			$this->get_control_key( 'is_active' ),
			array(
				'settings' => $this->get_setting_key( 'is_active' ),
				'label'    => 'Show Footer',
				'section'  => $this->get( 'section_id' ),
				'type'     => 'checkbox',
			)
		);

		$this->wp_customize->add_control(
			$this->get_control_key( 'footer_title' ),
			array(
				'settings' => $this->get_setting_key( 'footer_title' ),
				'label'    => 'Footer Title',
				'section'  => $this->get( 'section_id' ),
				'type'     => 'text',
			)
		);

		$this->wp_customize->add_control(
			$this->get_control_key( 'footer_caption' ),
			array(
				'settings' => $this->get_setting_key( 'footer_caption' ),
				'label'    => 'Footer Caption',
				'section'  => $this->get( 'section_id' ),
				'type'     => 'textarea',
			)
		);

		$this->wp_customize->add_control(
			$this->get_control_key( 'show_social' ),
			array(
				'settings' => $this->get_setting_key( 'show_social' ),
				'label'    => 'Show Social Icons',
				'section'  => $this->get( 'section_id' ),
				'type'     => 'checkbox',
			)
		);

	}

}
