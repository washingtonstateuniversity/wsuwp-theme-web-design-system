<?php namespace WSUWP\Theme\WDS;

class Block_Site_Nav_Vertical extends Block {

	public static $default_atts = array(
		'is_active'     => true,
		'start_open'    => true,
		'wrapper_class' => '',
	);


	protected static function render( $atts, $content ) {

		if ( ! empty( $atts['is_active'] ) ) {

			if ( ! empty( $atts['start_open'] ) ) {

				$atts['wrapper_class'] .= ' wsu-s-nav-vertical__wrapper--start-open';

			}

			Theme::require_class( 'menu' );

			$menu = new Menu( 'site_nav_vertical' );

			$menu_items = $menu->get( 'menu_array' );

			include __DIR__ . '/templates/default.php';

		}

	}

}
