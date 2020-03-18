<?php namespace WSUWP\Theme\WDS;


class Menus {


	public function __construct() {

		Theme::require_class( 'menu' );

	}


	public function init() {

		add_action( 'after_setup_theme', __CLASS__ . '::register_menus', 0 );

	}


	public static function register_menus() {

		register_nav_menus( 
			array(
				'site_nav_horizontal' => 'Site Horizontal Navigation',
				'site_nav_vertical'  => 'Site Vertical Navigation',
				'site_footer'  => 'Site Footer',
			)
		);

	}

	public static function get_menu_array( $location ) {

		$menu = new Menu( $location );

		return $menu->get( 'menu_array' );

	}

}

( new Menus() )->init();
