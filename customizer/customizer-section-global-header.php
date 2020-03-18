<?php namespace WSUWP\Theme\WDS;

class Customizer_Section_Global_Header extends Customizer_Section {

	protected $section_id    = 'wsu_wsd_theme_option_components_global_header';
	protected $section_title = 'Global Header';
	protected $key_base      = 'global_header';


	public function add_section() {

		$this->wp_customize->add_setting(
			$this->get( 'theme_key' ) . '[components][' . $this->get( 'key_base' ) . '][is_active]',
			array(
				'default'     => 'off',
				'transport'   => 'refresh',
			)
		);

		$this->wp_customize->add_section(
			$this->get( 'section_id' ),
			array(
				'title'      => 'Global Header',
				'priority'   => 30,
				'panel'      => $this->panel_id,
			)
		);

		$this->wp_customize->add_control(
			'wsu_wsd_theme_option_components_' . $this->get( 'key_base' ) . '_is_active_control',
			array(
				'settings' => $this->get( 'theme_key' ) . '[components][' . $this->get( 'key_base' ) . '][is_active]',
				'label'    => 'Show Global Header',
				'section'  => $this->get( 'section_id' ),
				'type'     => 'checkbox',
			)
		);

	}

}
