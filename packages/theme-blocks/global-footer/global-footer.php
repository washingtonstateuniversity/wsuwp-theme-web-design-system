<?php namespace WSUWP\Theme\WDS;

class Block_Global_Footer extends Block {

	public static $default_atts = array(
		'is_active' => true,
	);


	protected static function render( $atts, $content ) {

		if ( ! empty( $atts['is_active'] ) ) {

			include __DIR__ . '/template.php';

		}

	}

}
