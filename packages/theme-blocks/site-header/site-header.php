<?php namespace WSUWP\Theme\WDS;

class Block_Site_Header extends Block {

	public static $default_atts = array(
		'title'     => '',
		'subtitle'  => '',
		'is_active' => true,
		'on_home'   => true,
		'style'     => '',
	);


	protected static function render( $atts, $content ) {

		if ( ! empty( $atts['is_active'] ) ) {

			include __DIR__ . '/templates/default.php';

		}

	}

}
