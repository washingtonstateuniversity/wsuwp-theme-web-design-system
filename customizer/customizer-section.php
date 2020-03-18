<?php namespace WSUWP\Theme\WDS;

class Customizer_Section {

	protected $section_id    = '';
	protected $section_title = '';
	protected $key_base      = '';
	protected $theme_key;
	protected $settings_key;
	protected $wp_customize;
	protected $panel_id;


	public function __construct( $wp_customize, $panel_id, $theme_key, $settings_key ) {

		$this->theme_key     = $theme_key;
		$this->wp_customize  = $wp_customize;
		$this->panel_id      = $panel_id;
		$this->$settings_key = $settings_key;

	}


	public function get( $property ) {

		switch ( $property ) {

			case 'section_id':
				return $this->section_id;
			case 'panel_id':
				return $this->panel_id;
			case 'section_title':
				return $this->section_title;
			case 'key_base':
				return $this->key_base;
			case 'theme_key':
				return $this->theme_key;
			case 'settings_key':
				return $this->settings_key;
			default:
				return '';
		}

	}

}
