<?php namespace WSUWP\Theme\Binder;

class Component_Global_Header {

	protected $args = array();


	public function __construct( $args = array() ) {

		if ( ! empty( $args ) ) {

			$this->args = $args;

		}

	}


	public function render() {

		include __DIR__ . '/template.php';

	}

}
