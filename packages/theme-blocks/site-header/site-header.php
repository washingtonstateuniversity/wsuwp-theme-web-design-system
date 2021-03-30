<?php namespace WSUWP\Theme\WDS;

class Block_Site_Header extends Block {

	public static $default_atts = array(
		'title'     => '',
		'subtitle'  => '',
		'is_active' => true,
		'on_home'   => true,
		'style'     => '',
		'link_site_title' => '',
		'link_site_subtitle' => '',
		'title_is_linked' => true,
	);


	protected static function render( $atts, $content ) {


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
