<?php namespace WSUWP\Theme\Binder;


class Menus {


	public function __construct() {

		add_action( 'after_setup_theme', 'WSUWP\Theme\Binder\Menus::register_menus', 0 );

		add_filter( 'pre_wp_nav_menu', 'WSUWP\Theme\Binder\Menus::get_nav_menu', 10, 2 );

	}


	public static function register_menus() {

		register_nav_menus( 
			array(
				'site_nav_horizontal' => 'Site Horizontal Navigation',
				'site_nav_vertical'  => 'Site Vertical Navigation',
			)
		);

	}


	public static function get_nav_menu( $menu, $args ) {

		if ( isset( $args->theme_location ) ) {

			$location = $args->theme_location;
			$base_dir = get_template_directory();

			switch ( $location ) {

				case 'site_nav_horizontal':
					require_once "{$base_dir}/classes/class-menu-site-horizontal.php";
					$wsuwp_menu = new Menu_Site_Horizontal();
					$menu = $wsuwp_menu->get_menu( $args );
					break;

			} // End switch
		} // End if

		return $menu;

	} // End get_nav_menu


}

$wsuwp_menus = new Menus();
