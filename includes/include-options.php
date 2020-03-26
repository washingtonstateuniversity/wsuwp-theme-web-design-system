<?php namespace WSUWP\Theme\WDS;


class Options {

	protected static $theme_key     = 'wsu_wsd_theme_option';
	protected static $settings_key  = 'wsu_wsd_site_option';
	protected static $options       = array(
		'components' => array(
			'global_header' => array(
				'is_active' => true,
			),
			'global_footer' => array(
				'is_active' => true,
			),
			'site_header' => array(
				'is_active'    => true,
				'show_on_home' => true, 
			),
			'site_footer' => array(
				'is_active'      => true,
				'footer_title'   => '',
				'footer_caption' => '',
				'show_social'    => true,
			),
			'site_nav_vertical' => array(
				'is_active' => true,
			),
			'content_hero' => array(
				'is_active' => true,
				'img_src'      => '',
				'title'        => '',
				'subtitle'     => '',
				'button_text'  => '',
				'button_link'  => '',
				'caption_text' => '',
			),
		),
		'site_info' => array(
			'contact' => array(
				'unit_name' => '',
				'address_1' => '',
				'address_2' => '',
				'city'      => '',
				'state'     => '',
				'zip'       => '',
				'phone'     => '',
				'email'     => '',
				'email'     => '',
			),
			'social' => array(
				'channel_one'        => '',
				'channel_one_link'   => '',
				'channel_two'        => '',
				'channel_two_link'   => '',
				'channel_three'      => '',
				'channel_three_link' => '',
				'channel_four'       => '',
				'channel_four_link'  => '',
			),
		),
	);


	public static function get( $property ) {

		switch ( $property ) {

			case 'settings_key':
				return self::$settings_key;
			case 'theme_key':
				return self::$theme_key;
			case 'options':
				return self::$options;
			default:
				return '';
		}
	}


	public function init() {

		add_action( 'init', __CLASS__ . '::set_options' );

		if ( is_customize_preview() ) {

			add_action( 'wp_head', __CLASS__ . '::set_options', 1 );

		}

	}


	public static function set_options() {

		$theme_options  = get_theme_mod( self::get( 'theme_key' ), array() );

		$site_options   = get_option( self::get( 'settings_key' ) );

		$site_options   = ( is_array( $site_options ) ) ? $site_options : array();
		$site_options   = apply_filters( 'wsu_wds_options', $site_options, 'site_options' );
		$theme_options  = apply_filters( 'wsu_wds_options', $theme_options, 'theme_options' );

		self::merge_option_sets( self::get( 'options' ), $site_options, $theme_options );

	}


	protected static function merge_option_sets( $default_options, $site_options, $theme_options ) {

		foreach ( $default_options as $group => $objects ) {

			foreach ( $objects as $object => $properties ) {

				foreach ( $properties as $property => $value ) {

					if ( ! empty( $theme_options[ $group ][ $object ] ) && array_key_exists( $property, $theme_options[ $group ][ $object ] ) ) {

						$new_value = $theme_options[ $group ][ $object ][ $property ];
						self::set_option( $group, $object, $property, $new_value );

					} elseif ( ! empty( $site_options[ $group ][ $object ] ) && array_key_exists( $property, $site_options[ $group ][ $object ] ) ) {


						$new_value = $site_options[ $group ][ $object ][ $property ];
						self::set_option( $group, $object, $property, $new_value );

					}
				}
			}
		}
	}

	protected static function set_option( $group, $object, $property, $value ) {

		if ( empty( self::$options[ $group ] ) ) {

			self::$options[ $group ] = array(
				$object => array(
					$property => $value,
				),
			);

		} elseif ( empty( self::$options[ $group ][ $object ] ) ) {

			self::$options[ $group ][ $object ] = array(
				$property => $value,
			);
		} else {
			self::$options[ $group ][ $object ][ $property ] = $value;
		}

	}


	public static function get_option( $group, $object, $property, $default = '' ) {

		$options = self::get( 'options' );

		if ( ! empty( $options[ $group ] ) && ! empty( $options[ $group ][ $object ] ) && isset( $options[ $group ][ $object ][ $property ] ) ) {

			$property_value = $options[ $group ][ $object ][ $property ];

			return $property_value;

		} else {

			return $default;

		}

	}

	public static function get_options( $group, $object, $default = array() ) {

		$options = self::get( 'options' );

		if ( ! empty( $options[ $group ] ) && ! empty( $options[ $group ][ $object ] ) ) {

			return $options[ $group ][ $object ];

		} else {

			return $default;

		}

	}

	public static function get_component_option( $component, $property, $default = '' ) {

		return self::get_option( 'components', $component, $property, $default );

	}

}

( new Options )->init();
