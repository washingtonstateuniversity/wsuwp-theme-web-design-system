<?php namespace WSUWP\Theme\WDS;

class Component_Search_Result extends Component {

	protected $args = array();
	protected $default_args = array(
		'format'    => 'excerpt',
		'excerpt'   => '',
	);


	public function render() {

		$component_options = Options::get_options( 'components', 'search_result' );

		$args = array_merge( $this->args, $component_options );
		$args = $this->set_args( $args );

		$args['excerpt'] = wp_trim_words( wp_strip_all_tags( get_the_excerpt() ), 25 );

		switch ( $args['format'] ) {

			case 'excerpt':
			default:
				include __DIR__ . '/template.php';
				break;

		}

	}


	protected function set_args( $args ) {

		return $args;

	}

}
