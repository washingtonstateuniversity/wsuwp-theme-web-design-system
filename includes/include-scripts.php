<?php namespace WSUWP\Theme\WDS;


class Scripts {


	public function init() {

		$this->setup_hooks();

	}

	
	protected function setup_hooks() {

		add_action( 'wp_enqueue_scripts', __CLASS__ . '::enqueue_scripts', 5 );

		add_action( 'admin_enqueue_scripts', __CLASS__ . '::enqueue_admin_scripts' );

		add_action( 'wp_enqueue_scripts', __CLASS__ . '::remove_scripts', 20 );

	}


	public static function remove_scripts() {

		wp_dequeue_style( 'wp-block-library' );

	}


	public static function enqueue_scripts() {

		$wds_version = ( ! empty( get_theme_mod( 'wsu_wds_settings_version' ) ) ) ? get_theme_mod( 'wsu_wds_settings_version' ) : '1.x';
		$version     = Theme::get( 'version' );
		$local_host  = ( function_exists( 'wp_get_environment_type' ) && ( 'local' === wp_get_environment_type() ) && defined( 'WSDDEVLOCALHOST' ) ) ? WSDDEVLOCALHOST : false;

		$wsu_design_system_normalize = 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css';
		$wsu_design_system_icons     = 'https://cdn.web.wsu.edu/designsystem/1.x/wsu-icons/dist/wsu-icons.bundle.css';
		$wsu_design_system_bundle    = ( $local_host ) ? $local_host . '/bundles/dist/wsu-design-system.bundle.dist.css' : 'https://cdn.web.wsu.edu/designsystem/' . $wds_version . '/build/dist/wsu-design-system.bundle.dist.css';
		$wsu_design_system_js        = ( $local_host ) ? $local_host . '/bundles/dist/wsu-design-system.bundle.dist.js' : 'https://cdn.web.wsu.edu/designsystem/' . $wds_version . '/build/dist/wsu-design-system.bundle.dist.js';

		wp_enqueue_style( 'wsu_design_system_normalize', $wsu_design_system_normalize, array(), $version );

		wp_enqueue_style( 'wsu_design_system_icons', $wsu_design_system_icons, array(), $version );

		wp_enqueue_style( 'wsu_design_system_bundle', $wsu_design_system_bundle, array(), $version );

		wp_enqueue_script( 'wsu_design_system_js', $wsu_design_system_js, array(), $version, true );


		if ( is_admin_bar_showing() ) {
			wp_enqueue_style( 'wsu_design_system_wordpress', 'https://cdn.web.wsu.edu/designsystem/' . $wds_version . '/build/dist/platforms/wsu-design-system.wordpress.bundle.dist.css', array(), $version );
		}

	}

	public static function enqueue_admin_scripts() {

		$wds_version = ( ! empty( get_theme_mod( 'wsu_wds_settings_version' ) ) ) ? get_theme_mod( 'wsu_wds_settings_version' ) : '1.x';
		$version     = Theme::get( 'version' );

		wp_enqueue_style( 'wsu_design_system_wordpress_admin', 'https://cdn.web.wsu.edu/designsystem/' . $wds_version . '/build/dist/platforms/wsu-design-system.wordpress.admin.bundle.dist.css', array(), $version );

	}

}

( new Scripts )->init();
