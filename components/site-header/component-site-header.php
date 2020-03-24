<?php namespace WSUWP\Theme\WDS;

class Component_Site_Header extends Component {

	protected $args = array();
	protected $default_args = array(
		'site_title'    => '',
		'site_subtitle' => '',
		'is_active'    => true,
		'show_on_home' => true,
	);


	public function render() {

		$component_options = Options::get_options( 'components', 'site_header' );

		$args = array_merge( $this->args, $component_options );
		$args = $this->set_args( $args );

		if ( ! empty( $args['is_active'] ) ) {

			include __DIR__ . '/template.php';

		}

	}


	protected function set_args( $args ) {

		if ( empty( $args['site_title'] ) ) {

			$args['site_title'] = get_bloginfo( 'name' );

		}

		if ( empty( $args['site_subtitle'] ) ) {

			$args['site_subtitle'] = get_bloginfo( 'description' );

		}

		if ( ! empty( $args['is_active'] ) ) {


			if ( is_front_page() && empty( $args['show_on_home'] ) ) {

				$args['is_active'] = false;

			}
		}

		return $args;

	}

}
