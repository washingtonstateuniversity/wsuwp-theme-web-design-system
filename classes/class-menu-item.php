<?php namespace WSUWP\Theme\Binder;

class Menu_Item {

	protected $nav_item;

	protected $title;

	protected $url;

	protected $title_attr;

	protected $children = array();


	public function __construct( $nav_item, $child_menu ) {

		$this->nav_item = $nav_item;

		$this->child_menu = $child_menu;

	}


	public function get( $prop ) {

		switch ( $prop ) {

			case 'title':
				return $this->title;

			default: 
				return '';

		}

	}


	protected function set_menu_item() {

		$parent_menu_item = array();

		//'id'           => $menu_item->ID,
		$this->title    = $nav_item->title;
		$this->url      = ( ! empty( $this->child_menu ) ) ? '#' : $nav_item->url;
		$this->children = array_merge( $parent, $this->child_menu );

	}
	
}