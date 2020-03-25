<?php namespace WSUWP\Theme\WDS;

class Component_Site_Nav_Vertical extends Component  {

	protected $args = array();
	protected $default_args = array(
		'is_active'     => true,
		'start_open'    => true,
		'wrapper_class' => '',
	);


	public function render() {

		Theme::require_class( 'menu' );

		$component_options = Options::get_options( 'components', 'site_nav_vertical' );

		$args = array_merge( $this->args, $component_options );
		$args = $this->set_args( $args );

		if ( $args['is_active'] ) {

			$menu = new Menu( 'site_nav_vertical' );

			$menu_items = $menu->get( 'menu_array' );

			include __DIR__ . '/template.php';

		}

	}


	protected function set_args( $args ) {

		if ( ! empty( $args['start_open'] ) ) {

			$args['wrapper_class'] .= ' wsu-s-nav-vertical__wrapper--open';

		}

		return $args;

	}

}
