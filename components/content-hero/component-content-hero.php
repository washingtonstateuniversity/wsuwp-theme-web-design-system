<?php namespace WSUWP\Theme\WDS;

class Component_Content_Hero extends Component {

	protected $args = array();
	protected $default_args = array(
		'is_active'    => true,
		'img_src'      => '',
		'title'        => '',
		'subtitle'     => '',
		'button_text'  => '',
		'button_link'  => '',
		'caption_text' => '',
	);


	public function render() {

		$component_options = Options::get_options( 'components', 'content_hero' );

		$args = array_merge( $this->args, $component_options );
		$args = $this->set_args( $args );

		if ( ! empty( $args['is_active'] ) ) {

			include __DIR__ . '/template.php';

		}

	}


	protected function set_args( $args ) {

		return $args;

	}

}
