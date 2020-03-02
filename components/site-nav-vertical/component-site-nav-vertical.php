<?php namespace WSUWP\Theme\WDS;

class Component_Site_Nav_Vertical {

	protected $args = array();

	protected $menu_id = '';


	public function __construct( $args = array() ) {

		Theme::require_class( 'menu' );

		if ( ! empty( $args ) ) {

			$this->args = $args;

		}

	}


	public function render() {

		$is_active = Theme::get_component_option( 'site_nav_vertical', 'is_active' );

		if ( $is_active ) {

			$menu = new Menu( 'site_nav_vertical' );

			$wrapper_class = ( ! empty( $this->args['wrapper_class'] ) ) ? implode( ' ', $this->args['wrapper_class'] ) : '';

			$menu_items = $menu->get( 'menu_array' );

			include __DIR__ . '/template.php';

		}

	}

}
