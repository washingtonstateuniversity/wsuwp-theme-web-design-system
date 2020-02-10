<?php namespace WSUWP\Theme\Binder;

class Component_Site_Nav_Vertical {

	protected $args = array();

	protected $menu_id = '';


	public function __construct( $args = array() ) {

		if ( ! empty( $args ) ) {

			$this->args = $args;

		}

	}


	public function render() {

		add_filter( 'wp_nav_menu_items', __CLASS__ . '::menu_wrapper_classes', 10, 2 );
		add_filter( 'nav_menu_css_class', __CLASS__ . '::link_wrapper_classes', 10, 4 );
		add_filter( 'nav_menu_link_attributes', __CLASS__ . '::link_attrs', 10, 4 );

		$wrapper_class = ( ! empty( $this->args['wrapper_class'] ) ) ? implode( ' ', $this->args['wrapper_class'] ) : '';

		include __DIR__ . '/template.php';

		remove_filter( 'wp_nav_menu_items', __CLASS__ . '::menu_wrapper_classes', 10, 2 );
		remove_filter( 'nav_menu_css_class', __CLASS__ . '::link_wrapper_classes', 10, 4 );
		remove_filter( 'nav_menu_link_attributes', __CLASS__ . '::link_attrs', 10, 4 );

	}

	public static function menu_wrapper_classes( $items, $args ) {

		$items = str_replace(
			'"sub-menu"',
			'"wsu-s-nav-vertical__nav-list" role="menu" aria-label="Replace Me w/ Link Name Submenu"', 
			$items 
		);

		return $items;

	}


	public static function link_attrs( $atts, $item, $args, $depth ) {

		//var_dump( $atts );

		$atts['class'] = ( ! empty( $atts['aria-current'] ) ) ? 'wsu-s-nav-vertical__nav-link--active': 'wsu-s-nav-vertical__nav-link';


		if ( array_key_exists( 'aria-current', $atts ) ) {

			unset( $atts['aria-current'] );
			
		}

		return $atts;

	}


	public static function link_wrapper_classes( $classes, $item, $args, $depth ) {

		//var_dump( $classes );

		$menu_classes = array();

		if ( in_array( 'menu-item-has-children', $classes, true ) ) {

			$menu_classes[] = 'wsu-s-nav-vertical__nav-item--has-children';

		} else {

			$menu_classes[] = 'wsu-s-nav-vertical__nav-item';

		}

		return $menu_classes;

	}

}
