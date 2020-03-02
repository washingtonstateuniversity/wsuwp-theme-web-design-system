<?php namespace WSUWP\Theme\WDS;

class Component_Site_Nav_Horizontal {

	protected $args = array();


	public function __construct( $args = array() ) {

		Theme::require_class( 'menu' );

		if ( ! empty( $args ) ) {

			$this->args = $args;

		}

	}


	public function render() {

		$menu = new Menu( 'site_nav_horizontal' );

		$menu_items = $menu->get( 'menu_array' );

		include __DIR__ . '/template.php';

	}

}
