<?php namespace WSUWP\Theme\WDS;

class Component_Site_Footer {

	protected $args = array();
	protected $default_options = array(
		'is_active'          => true,
		'menu'               => array(),
		'footer_title'       => '',
		'footer_caption'     => '',
		'unit_name'          => '',
		'address_1'          => '',
		'address_2'          => '',
		'city'               => '',
		'state'              => '',
		'zip'                => '',
		'phone'              => '',
		'email'              => '',
		'fax'                => '',
		'show_social'        => true,
		'channel_one'        => '',
		'channel_one_link'   => '',
		'channel_two'        => '',
		'channel_two_link'   => '',
		'channel_three'      => '',
		'channel_three_link' => '',
		'channel_four'       => '',
		'channel_four_link'  => '',
	);


	public function __construct( $args = array() ) {

		Theme::require_class( 'menu' );

		if ( ! empty( $args ) ) {

			$this->args = $args;

		}

	}


	public function render() {

		$component_options = Options::get_options( 'components', 'site_footer' );
		$contact_options   = Options::get_options( 'site_info', 'contact' );
		$social_options    = Options::get_options( 'site_info', 'social' ); 

		$args = array_merge( 
			$this->default_options, 
			$component_options, 
			$contact_options,
			$social_options,
			$this->args 
		);

		$args['menu'] = Menus::get_menu_array( 'footer_links' );

		if ( ! empty( $args['is_active'] ) ) {

			include __DIR__ . '/template.php';

		}

	}

}
