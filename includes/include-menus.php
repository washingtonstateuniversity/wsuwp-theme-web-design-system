<?php namespace WSUWP\Theme\Binder;


class Menus {


	public function __construct() {

		add_action( 'after_setup_theme', 'WSUWP\Theme\Binder\Menus::register_menus', 0 );

	}


	public static function register_menus() {

		register_nav_menus( 
			array(
				'site_nav_horizontal' => 'Site Horizontal Navigation',
				'site_nav_vertical'  => 'Site Vertical Navigation',
			)
		);

	}

}

$wsuwp_menus = new Menus();
