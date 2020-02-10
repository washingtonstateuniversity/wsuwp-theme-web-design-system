<?php namespace WSUWP\Theme\Binder;

class Menu {

	protected $location  = '';
	protected $menu_id = false; 
	protected $menu_items = array();
	protected $menu_array = array();

	public function __construct( $theme_location = false ) {

		if ( ! empty( $theme_location ) ) {

			$this->location = $theme_location;

			$this->set_menu();

		}

	}


	public function get( $prop ) {

		switch ( $prop ) {

			case 'menu_array':
				return $this->menu_array;
			
			default: 
				return '';
		}

	}


	protected function set_menu() {

		$locations = get_nav_menu_locations();

		if ( array_key_exists( $this->location, $locations ) ) {

			$this->menu_id = $locations[ $this->location ];

			$this->set_menu_items();

		} // End if

	}

	protected function set_menu_items() {

		$menu_items = wp_get_nav_menu_items( $this->menu_id, array( 'update_post_term_cache' => false ) );

		$sorted_menu_items        = array();
		$menu_items_with_children = array();
		
		foreach ( (array) $menu_items as $menu_item ) {

			$sorted_menu_items[ $menu_item->menu_order ] = $menu_item;

			if ( $menu_item->menu_item_parent ) {

				$menu_items_with_children[ $menu_item->menu_item_parent ] = true;

			}
		}

		// Add the menu-item-has-children class where applicable
		if ( $menu_items_with_children ) {

			foreach ( $sorted_menu_items as &$menu_item ) {

				if ( isset( $menu_items_with_children[ $menu_item->ID ] ) ) {

					$menu_item->classes[] = 'menu-item-has-children';

				}
			}
		}

		unset( $menu_items, $menu_item );

		$sorted_menu_items = apply_filters( 'wp_nav_menu_objects', $sorted_menu_items, $args );

		var_dump( $sorted_menu_items );

	}

	/*

	protected function set_menu() {

		$this->set_menu_id();

		$this->set_menu_items();

		$this->set_menu_array();

	}


	protected function set_menu_items() {

		if ( false !== $this->menu_id ) {

			$this->menu_items = wp_get_nav_menu_items( $this->menu_id );

		}

	}


	protected function set_menu_id() {

		$locations = get_nav_menu_locations();

		if ( array_key_exists( $this->location, $locations ) ) {

			$this->menu_id = $locations[ $this->location ];

		} // End if

	}

	protected function set_menu_array() {

		$menu = wp_get_nav_menu_object( $this->menu_id );

		$menu_items = wp_get_nav_menu_items( $menu->term_id, array( 'update_post_term_cache' => false ) );

		var_dump( $menu_items );

		$this->menu_array = $this->get_children_recursive( 0 );

	}

	protected function get_children_recursive( $parent_id ) {

		$children = array();

		foreach ( $this->menu_items as $menu_item ) {

			if ( $parent_id == $menu_item->menu_item_parent ) {

				//var_dump( $menu_item );

				$child_items = $this->get_children_recursive( $menu_item->ID );

				if ( ! empty( $child_items ) && '#' !== $menu_item->url ) {

					$parent = array(
						array(
							'id'           => $menu_item->ID,
							'title'        => ( ! empty( $menu_item->attr_title ) ) ? $menu_item->attr_title : $menu_item->title, 
							'url'          => $menu_item->url,
							'children'     => array(),
							'has_children' => false,
						),
					);

				} else {

					$parent = array();
				}

				$children[] = array(
					'id'           => $menu_item->ID,
					'title'        => $menu_item->title,
					'url'          => ( ! empty( $child_items ) ) ? '#' : $menu_item->url,
					'children'     => array_merge( $parent, $child_items ),
					'has_children' => ( ! empty( $child_items ) ) ? true : false,
				);

			} // End if
		} // End foreach

		return $children;

	} */
}
