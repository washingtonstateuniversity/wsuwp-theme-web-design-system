<?php namespace WSUWP\Theme\WDS;


class Menus {


	public function init() {

		add_action( 'after_setup_theme', __CLASS__ . '::register_menus', 0 );

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

( new Menus() )->init();
