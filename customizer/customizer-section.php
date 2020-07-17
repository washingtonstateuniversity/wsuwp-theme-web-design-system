<?php namespace WSUWP\Theme\WDS;

class Customizer_Section {

	protected $section_base    = 'wsu_section_wsd_component';
	protected $section_title = '';
	protected $settings_group = '';
	protected $key_base      = '';
	protected $theme_key;
	protected $settings_key;
	protected $panel_id = 'wds';


	public function __construct( $theme_key, $settings_key ) {

		$this->theme_key     = $theme_key;
		$this->settings_key  = $settings_key;

	}


	public function get( $property ) {

		switch ( $property ) {

			case 'section_id':
				return $this->section_base . '_' . $this->key_base;
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
			case 'settings_group':
				return $this->settings_group;
			default:
				return '';
		}

	}

	public function add_section( $wp_customize ) {

		$wp_customize->add_section(
			$this->get( 'section_id' ),
			array(
				'title'      => $this->get( 'section_title' ),
				'priority'   => 30,
				'panel'      => $this->get( 'panel_id' ),
			)
		);

		if ( method_exists( $this, 'add_controls' ) ) {

			$this->add_controls( $wp_customize );

		}

	}


	protected function get_setting_key( $setting, $is_option = false ) {

		if ( $is_option ) {

			return $this->get( 'settings_key' ) . '[' . $this->get( 'settings_group' ) . '][' . $this->get( 'key_base' ) . '][' . $setting . ']';

		} else {

			return $this->get( 'theme_key' ) . '[' . $this->get( 'settings_group' ) . '][' . $this->get( 'key_base' ) . '][' . $setting . ']';

		}

	}


	protected function get_control_key( $setting ) {

		return 'wsu_theme_wds_' . $this->get( 'section_id' ) . '_' . $setting . '_control';

	}

}
