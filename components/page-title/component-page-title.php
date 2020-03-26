<?php namespace WSUWP\Theme\WDS;

class Component_Page_Title extends Component {

	protected $args = array();
	protected $default_args = array(
		'title'    => '',
	);


	public function render() {

		$component_options = Options::get_options( 'components', 'page_title' );

		$args = array_merge( $this->args, $component_options );
		$args = $this->set_args( $args );

		include __DIR__ . '/template.php';
	

	}


	protected function set_args( $args ) {

		return $args;

	}

}
