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

		if ( ! empty( $setup_options['wds_version'] ) ) {

			$wds_version = $setup_options['wds_version'];
			$version = Theme::get( 'version' );

		} elseif ( 'all' === $setup_options['beta_mode'] || ( 'admin' === $setup_options['beta_mode'] && is_user_logged_in() ) ) {

			$wds_version = 'beta';
			$version = time();

		} else  {

			$wds_version = '1';
			$version = Theme::get( 'version' );

		}

		wp_enqueue_style( 'wsu_design_system_normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), $version );

		wp_enqueue_style( 'wsu_design_system_icons', 'https://cdn.web.wsu.edu/designsystem/1.x/wsu-icons/dist/wsu-icons.bundle.css', array(), $version );

		wp_enqueue_style( 'wsu_design_system_bundle', 'https://cdn.web.wsu.edu/designsystem/' . $wds_version . '/build/dist/wsu-design-system.bundle.dist.css', array(), $version );

		wp_enqueue_script( 'wsu_design_system_css', 'https://cdn.web.wsu.edu/designsystem/' . $wds_version . '/build/dist/wsu-design-system.bundle.dist.js', array(), $version, true );

	}

}

( new Scripts )->init();
