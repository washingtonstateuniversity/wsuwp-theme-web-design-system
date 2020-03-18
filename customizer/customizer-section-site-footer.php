<?php namespace WSUWP\Theme\WDS;

class Customizer_Section_Site_Footer extends Customizer_Section  {

	protected $section_title = 'Site Footer';
	protected $key_base      = 'site_footer';


	public function add_section() {

		$this->wp_customize->add_setting(
			$this->get( 'theme_key' ) . '[components][' . $this->get( 'key_base' ) . '][is_active]',
			array(
				'default'     => false,
				'transport'   => 'refresh',
			)
		);

		$this->wp_customize->add_section(
			$this->get( 'section_id' ),
			array(
				'title'      => $this->get( 'section_title' ),
				'priority'   => 30,
				'panel'      => $this->get( 'panel_id' ),
			)
		);

		$this->wp_customize->add_control(
			'wsu_theme_wds_show_' . $this->get( 'key_base' ) . '_control',
			array(
				'settings' => $this->get( 'theme_key' ) . '[components][' . $this->get( 'key_base' ) . '][is_active]',
				'label'    => 'Show Site Footer',
				'section'  => $this->get( 'section_id' ),
				'type'     => 'checkbox',
			)
		);

	}

}
