<?php namespace WSUWP\Theme\WDS;

class Component {

	protected $args = array();
	protected $default_args = array();


	public function __construct( $args = array() ) {

		$this->args = $this->parse_args( $args );

	}


	protected function parse_args( $args ) {

		// Make sure $args is an array
		if ( ! is_array( $args ) ) {

			return $args = $this->default_args;

		} else {

			return array_merge( $this->default_args, $args );

		} // End if

	}

}
