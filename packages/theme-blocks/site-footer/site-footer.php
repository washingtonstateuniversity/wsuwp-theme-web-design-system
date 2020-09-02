<?php namespace WSUWP\Theme\WDS;

class Block_Site_Footer extends Block {

	public static $default_atts = array(
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


	protected static function render( $atts, $content ) {

		Theme::require_class( 'menu' );

		$atts['menu'] = Menus::get_menu_array( 'site_footer' );

		

		$content = ( ! empty( $content ) ) ? $content : self::get_footer_content( $atts );

		if ( ! empty( $atts['is_active'] ) ) {

			include __DIR__ . '/template.php';

		}

	}

	protected static function get_footer_content( $atts ) {

		$content = '';

		if ( is_active_sidebar( 'site_footer' ) ) {

			ob_start();

			dynamic_sidebar( 'site_footer' );

			$content = ob_get_clean();

		}

		return $content;

	}

}
