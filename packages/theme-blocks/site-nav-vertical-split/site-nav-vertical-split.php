<?php namespace WSUWP\Theme\WDS;

class Block_Site_Nav_Vertical_Split extends Block {

	public static $default_atts = array(
		'is_active'     => true,
		'start_open'    => true,
		'wrapper_class' => '',
	);


	protected static function render( $atts, $content ) {

		if ( ! empty( $atts['is_active'] ) ) {

			Theme::require_class( 'menu-walker' );

			include __DIR__ . '/templates/default.php';

		}

	}

}
