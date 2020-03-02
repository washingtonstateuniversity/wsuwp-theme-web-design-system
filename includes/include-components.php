<?php namespace WSUWP\Theme\WDS;


class Components {


	public function init() {
	}


	public static function render( $slug, $args = array() ) {

		do_action( 'wsuwp_wds_component_render', $slug, $args );

		$component = self::get( $slug, $args );

		if ( is_object( $component ) ) {

			$component->render();

		}

	}

	public static function get( $slug, $args = array() ) {

		$component = false;

		// No ... in paths please :)
		$slug = str_replace( '.', '', $slug );

		$slug_base = explode( '-', $slug );

		$slug_base = array_map( 'ucfirst', $slug_base );

		$component_class = 'Component_' . implode( '_', $slug_base );

		$template = locate_template( '/components/' . $slug . '/component-' . $slug . '.php' );

		if ( ! empty( $template ) ) {

			require_once $template;

			if ( class_exists( __NAMESPACE__ . '\\' . $component_class ) ) {

				$component_class = __NAMESPACE__ . '\\' . $component_class;

				$component = new $component_class( $args );

			} // End if
		} // End if

		return $component;

	}

}

(new Components)->init();
