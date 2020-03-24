<?php namespace WSUWP\Theme\WDS;

class Customizer_Section_Contact extends Customizer_Section {

	protected $section_title  = 'Contact Information';
	protected $settings_group = 'site_info';
	protected $key_base       = 'contact';



	public function add_section() {

		$this->wp_customize->add_section(
			$this->get( 'section_id' ),
			array(
				'title'      => $this->get( 'section_title' ),
				'priority'   => 30,
				'panel'      => $this->get( 'settings_group' ),
			)
		);

		$text_options = array(
			'unit_name' => 'Unit Name',
			'address_1' => 'Address Line 1',
			'address_2' => 'Address Line 2',
			'city'      => 'City',
			'state'     => 'State',
			'zip'       => 'Zip',
			'phone'     => 'Phone',
			'email'     => 'Email',
			'fax'       => 'Fax',
		);

		foreach ( $text_options as $key => $label ) {

			$this->wp_customize->add_setting(
				$this->get_setting_key( $key, true ),
				array(
					'default'     => '',
					'transport'   => 'refresh',
					'type'        => 'option',
				)
			);

			$this->wp_customize->add_control(
				$this->get_control_key( $key ),
				array(
					'settings' => $this->get_setting_key( $key, true ),
					'label'    => $label,
					'section'  => $this->get( 'section_id' ),
					'type'     => 'text',
				)
			);

		}

	}

}
