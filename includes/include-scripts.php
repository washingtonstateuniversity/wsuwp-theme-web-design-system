<?php namespace WSUWP\Theme\WDS;


class Scripts {


	public function init() {

		$this->setup_hooks();

	}

	
	protected function setup_hooks() {

		add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\Scripts::enqueue_scripts' );

	}


	public static function enqueue_scripts() {

		$setup_options = Options::get_options( 'site_setup', 'advanced' );

		$wds_version = ( ! empty( $setup_options['beta_mode'] ) ) ? 'beta' : '1';

		wp_enqueue_style( 'wsu_design_system_normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), Theme::get( 'version' ) );

		wp_enqueue_style( 'wsu_design_system_icons', 'https://cdn.web.wsu.edu/designsystem/1.x/wsu-icons/dist/wsu-icons.bundle.css', array(), Theme::get( 'version' ) );

		wp_enqueue_style( 'wsu_design_system_bundle', 'https://cdn.web.wsu.edu/designsystem/' . $wds_version . '/build/dist/wsu-design-system.bundle.dist.css', array(), Theme::get( 'version' ) );

		wp_enqueue_script( 'wsu_design_system_css', 'https://cdn.web.wsu.edu/designsystem/' . $wds_version . '/build/dist/wsu-design-system.bundle.dist.js', array(), Theme::get( 'version' ), true );

	}

}

( new Scripts )->init();
