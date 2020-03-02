<?php namespace WSUWP\Theme\WDS;

class Component_Site_Header {

	protected $args = array();
	protected $default_args = array(
		'site_title'    => '',
		'site_subtitle' => '',
	);


	public function __construct( $args = array() ) {

		$this->args = $this->parse_args( $args );

	}


	protected function parse_args( $args ) {

		// Make sure $args is an array
		if ( ! is_array( $args ) ) {

			$args = array();

		} // End if

		// Check if title is given, if not use site title
		$args['site_title'] = ( ! empty( $args['site_title'] ) ) ? $args['site_title'] : get_bloginfo( 'name' );

		// Check if sub title is given, if not use site description.
		$args['site_subtitle'] = ( ! empty( $args['site_subtitle'] ) ) ? $args['site_subtitle'] : get_bloginfo( 'description' );

		return array_merge( $this->default_args, $args );

	}


	public function render() {

		$site_title    = $this->args['site_title'];
		$site_subtitle = $this->args['site_subtitle'];

		include __DIR__ . '/template.php';

	}

}
