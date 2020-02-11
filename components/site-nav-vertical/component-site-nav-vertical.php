<?php namespace WSUWP\Theme\Binder;

class Component_Site_Nav_Vertical {

	protected $args = array();

	protected $menu_id = '';


	public function __construct( $args = array() ) {

		if ( ! empty( $args ) ) {

			$this->args = $args;

		}

	}


	public function render() {

		$wrapper_class = ( ! empty( $this->args['wrapper_class'] ) ) ? implode( ' ', $this->args['wrapper_class'] ) : '';

		include __DIR__ . '/template.php';

	}

}
