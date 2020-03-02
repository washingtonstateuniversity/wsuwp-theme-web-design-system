<?php namespace WSUWP\Theme\WDS;

class Component_Global_Header {

	protected $args = array();


	public function __construct( $args = array() ) {

		if ( ! empty( $args ) ) {

			$this->args = $args;

		}

	}


	public function render() {

		$is_active = Theme::get_component_option( 'global_header', 'is_active' );

		if ( $is_active ) {

			include __DIR__ . '/template.php';

		}

	}

}
