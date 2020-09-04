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

		wp_enqueue_style( 'wsu_design_system_normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), $version );

		wp_enqueue_style( 'wsu_design_system_icons', 'https://cdn.web.wsu.edu/designsystem/1.x/wsu-icons/dist/wsu-icons.bundle.css', array(), $version );

		wp_enqueue_style( 'wsu_design_system_bundle', 'https://cdn.web.wsu.edu/designsystem/' . $wds_version . '/build/dist/wsu-design-system.bundle.dist.css', array(), $version );

		if ( is_admin_bar_showing() ) {
			wp_enqueue_style( 'wsu_design_system_wordpress', 'https://cdn.web.wsu.edu/designsystem/' . $wds_version . '/build/dist/platforms/wsu-design-system.wordpress.bundle.dist.css', array(), $version );
		}

		wp_enqueue_script( 'wsu_design_system_js', 'https://cdn.web.wsu.edu/designsystem/' . $wds_version . '/build/dist/wsu-design-system.bundle.dist.js', array(), $version, true );

	}

	public static function enqueue_admin_scripts() {

		$wds_version = ( ! empty( get_theme_mod( 'wsu_wds_settings_version' ) ) ) ? get_theme_mod( 'wsu_wds_settings_version' ) : '1.x';
		$version     = Theme::get( 'version' );

		wp_enqueue_style( 'wsu_design_system_wordpress_admin', 'https://cdn.web.wsu.edu/designsystem/' . $wds_version . '/build/dist/platforms/wsu-design-system.wordpress.admin.bundle.dist.css', array(), $version );

	}

}

( new Scripts )->init();
