<?php namespace WSUWP\Theme\WDS;

class Menu {

	protected $location  = '';
	protected $menu_id = false;
	protected $menu_items = array();
	protected $menu_items_parents = array();
	protected $menu_items_children = array();
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

			$this->set_menu_array();

		} // End if

	}

	protected function set_menu_items() {

		$menu_items = wp_get_nav_menu_items( $this->menu_id, array( 'update_post_term_cache' => false ) );

		_wp_menu_item_classes_by_context( $menu_items );

		foreach ( $menu_items as $menu_item ) {

			$menu_key = 'menu-' . $menu_item->ID;

			$this->menu_items[ $menu_key ] = $menu_item;

			if ( isset( $menu_item->menu_item_parent ) && ! empty( $menu_item->menu_item_parent ) ) {

				$parent_key = 'menu-' . $menu_item->menu_item_parent;

				if ( ! array_key_exists( $parent_key, $this->menu_items_children ) ) {

					$this->menu_items_children[ $parent_key ] = array();

				}

				$this->menu_items_children[ $parent_key ][] = $menu_key;

			} else {

				$this->menu_items_parents[] = $menu_key;

			} // End if
		} // End foreach

	}


	protected function set_menu_array() {

		foreach ( $this->menu_items_parents as $index => $parent_key ) {

			$menu_item = $this->get_menu_item( $parent_key );

			if ( ! empty( $menu_item ) ) {

				$this->menu_array[] = $menu_item;

			} // end if

		} // End foreach

	}

	protected function get_menu_item( $key ) {

		if ( array_key_exists( $key, $this->menu_items ) ) {

			$menu_obj = $this->menu_items[ $key ];

			$menu_item = array(
				'id'           => $menu_obj->ID,
				'title'        => $menu_obj->title,
				'url'          => $menu_obj->url,
				'is_inherited' => false,
				'is_current_item' => false,
				'is_current_ancestor' => false,
				'children'     => array(),
			);

			if ( isset( $menu_obj->classes ) && is_array( $menu_obj->classes ) ) {

				if ( in_array( 'current-menu-item', $menu_obj->classes, true ) ) {

					$menu_item['is_current_item'] = true;

				} // End if

				if ( in_array( 'current-menu-ancestor', $menu_obj->classes, true ) ) {

					$menu_item['is_current_ancestor'] = true;

				} // End if
			} // End if

			if ( array_key_exists( $key, $this->menu_items_children ) ) {

				foreach ( $this->menu_items_children[ $key ] as $index => $child_key ) {

					$menu_item['children'][] = $this->get_menu_item( $child_key );
				} // End foreach
			} // End if

			if ( '#' !== $menu_item['url'] && ! empty( $menu_item['children'] ) ) {

				$child_menu_item = $menu_item;

				if ( $menu_item['is_current_item'] ) {

					$menu_item['is_current_item'] = false;
					$menu_item['is_current_ancestor'] = true;
					$child_menu_item['is_current_item'] = true;

				}

				$child_menu_item['title'] = ( ! empty( $menu_obj->attr_title ) ) ? $menu_obj->attr_title : $menu_obj->title;
				$child_menu_item['is_inherited'] = true;
				$child_menu_item['children'] = array();

				array_unshift( $menu_item['children'], $child_menu_item );

			}

			return $menu_item;

		} else {

			return array();

		}

	}

}
