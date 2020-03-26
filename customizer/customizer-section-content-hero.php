<?php namespace WSUWP\Theme\WDS;

class Customizer_Section_Content_Hero extends Customizer_Section {

	protected $section_title  = 'Hero Banner';
	protected $key_base       = 'content_hero';
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
				'default'     => false,
				'transport'   => 'refresh',
			)
		);

		$this->wp_customize->add_setting(
			$this->get_setting_key( 'img_src' ),
			array(
				'default'     => '',
				'transport'   => 'refresh',
			)
		);

		$this->wp_customize->add_setting(
			$this->get_setting_key( 'title' ),
			array(
				'default'     => '',
				'transport'   => 'refresh',
			)
		);


		$this->wp_customize->add_control(
			$this->get_control_key( 'is_active' ),
			array(
				'settings' => $this->get_setting_key( 'is_active' ),
				'label'    => 'Show Hero Banner',
				'section'  => $this->get( 'section_id' ),
				'type'     => 'checkbox',
			)
		);

		$this->wp_customize->add_control(
			new \WP_Customize_Image_Control(
				$this->wp_customize,
				'logo',
				array(
					'label'      => 'Upload Image',
					'section'  => $this->get( 'section_id' ),
					'settings' => $this->get_setting_key( 'img_src' ),
				)
			)
		);

		$this->wp_customize->add_control(
			$this->get_control_key( 'title' ),
			array(
				'settings' => $this->get_setting_key( 'title' ),
				'label'    => 'Title',
				'section'  => $this->get( 'section_id' ),
				'type'     => 'text',
			)
		);


	}

}
