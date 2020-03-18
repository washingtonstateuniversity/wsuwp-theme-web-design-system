<?php namespace WSUWP\Theme\WDS;

class Component_Site_Footer {

	protected $args = array();


	public function __construct( $args = array() ) {

		Theme::require_class( 'menu' );

		if ( ! empty( $args ) ) {

			$this->args = $args;

		}

	}


	public function render() {

		$is_active = Theme::get_component_option( 'site_footer', 'is_active' );

		if ( $is_active ) {

			$menu = new Menu( 'site_footer' );

			$menu_items = $menu->get( 'menu_array' );

			include __DIR__ . '/template.php';

		}

	}

}
