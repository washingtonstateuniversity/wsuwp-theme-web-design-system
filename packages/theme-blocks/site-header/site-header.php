<?php namespace WSUWP\Theme\WDS;

class Block_Site_Header extends Block {

	public static $default_atts = array(
		'title'     => '',
		'subtitle'  => '',
		'is_active' => true,
		'on_home'   => true,
		'style'     => '',
		'site_link' => '',
	);


	protected static function render( $atts, $content ) {

		$atts['site_link'] = ( ! empty( $atts['site_link'] ) ) ? $atts['site_link'] : get_theme_mod( 'wsu_wds_site_header_link', get_bloginfo( 'url' ) );

		if ( self::check_should_display( $atts ) ) {

			include __DIR__ . '/templates/default.php';

		}

	}


	protected static function check_should_display( $atts ) {

		if ( empty( $atts['is_active'] ) ) {

			return false;

		}

		if ( is_front_page() && empty( $atts['on_home'] ) ) {

			return false;

		}

		return true;

	}

}
