<?php namespace WSUWP\Theme\WDS;

class Component_Site_Nav_Horizontal extends Component {

	protected $args = array();
	protected $default_args = array(
		'is_active'    => true,
	);


	public function render() {

		Theme::require_class( 'menu' );

		$component_options = Options::get_options( 'components', 'site_nav_horizontal' );

		$args = array_merge( $this->args, $component_options );

		$menu = new Menu( 'site_nav_horizontal' );

		$menu_items = $menu->get( 'menu_array' );

		if ( ! empty( $menu_items ) ) {

			include __DIR__ . '/template.php';

		}

	}

}
