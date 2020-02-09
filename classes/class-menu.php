<?php namespace WSUWP\Theme\Binder;

class Menu {

	protected $location  = '';
	protected $menu_id = false; 
	protected $menu_items = array();
	protected $menu_array = array();

	public function __construct( $theme_location = false ) {

		if ( ! empty( $theme_location ) ) {

			$this->location = $theme_location;
		}

		$this->set_menu();

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
						'id'           => $menu_item->ID,
						'title'        => ( ! empty( $menu_item->attr_title ) ) ? $menu_item->attr_title : $menu_item->title, 
						'url'          => $menu_item->url,
						'children'     => array(),
						'has_children' => false,
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

	}
}
