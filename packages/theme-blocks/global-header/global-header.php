<?php namespace WSUWP\Theme\WDS;

class Block_Global_Header extends Block {

	public static $default_atts = array(
		'is_active' => true,
		'give_url'  => 'https://foundation.wsu.edu/',
	);


	protected static function render( $atts, $content ) {

		if ( ! empty( $atts['is_active'] ) ) {

			include __DIR__ . '/template.php';

		}

	}

}
