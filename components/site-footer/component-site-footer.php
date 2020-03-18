<?php namespace WSUWP\Theme\WDS;

class Component_Site_Footer {

	protected $args = array();
	protected $default_options = array(
		'is_active'  => true,
		'show_links' => true,
	);


	public function __construct( $args = array() ) {

		Theme::require_class( 'menu' );

		if ( ! empty( $args ) ) {

			$this->args = $args;

		}

	}


	public function render() {

		$component_options = Options::get_options( 'components', 'site_footer' );

		$options = array_merge( $this->default_options, $component_options, $this->args );

		$menu =  Menus::get_menu_array( 'footer_links' );

		var_dump( $menu );

		if ( ! empty( $options['is_active'] ) ) {

			include __DIR__ . '/template.php';

		}

	}

}
