<?php namespace WSUWP\Theme\WDS;

class Customizer_WDS_Settings extends Customizer_Section {

	protected $section_title  = 'Advanced Settings';
	protected $settings_group = 'site_setup';
	protected $key_base       = 'advanced';


	protected function add_controls( $wp_customize ) {

		$wp_customize->add_setting(
			$this->get_setting_key( 'wds_version' ),
			array(
				'default'     => '',
				'transport'   => 'refresh',
			)
		);


		$wp_customize->add_control(
			$this->get_control_key( 'wds_version' ),
			array(
				'settings' => $this->get_setting_key( 'wds_version' ),
				'label'    => 'WDS Version',
				'section'  => $this->get( 'section_id' ),
				'type'     => 'text',
			)
		);

	}

}
