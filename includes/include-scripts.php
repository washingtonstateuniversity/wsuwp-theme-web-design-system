<?php namespace WSUWP\Theme\WDS;


class Scripts {

	protected static $wds_version = '1.x';
	protected static $is_local = false;

	public function __construct() {

		self::$wds_version = ( ! empty( get_theme_mod( 'wsu_wds_settings_version' ) ) ) ? get_theme_mod( 'wsu_wds_settings_version' ) : '1.x';
		self::$is_local = ( defined( 'WDS_LOCALHOST_URL' ) ) ? true : false;

	}

	public static function get( $property ) {

		switch ( $property ) {
			case 'wds_version':
				return self::$wds_version;
			case 'is_local':
				return self::$is_local;
			default:
				return '';
		}

	}

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

		$wsu_design_system_normalize    = 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css';
		$wsu_design_system_icons        = 'https://cdn.web.wsu.edu/designsystem/1.x/wsu-icons/dist/wsu-icons.bundle.css';
		$wsu_design_system_bundle       = ( self::get('is_local') ) ? WDS_LOCALHOST_URL . '/bundles/dist/wsu-design-system.bundle.dist.css' : 'https://cdn.web.wsu.edu/designsystem/' . self::get('wds_version') . '/build/dist/wsu-design-system.bundle.dist.css';
		$wsu_design_system_js           = ( self::get('is_local') ) ? WDS_LOCALHOST_URL . '/bundles/dist/wsu-design-system.bundle.dist.js' : 'https://cdn.web.wsu.edu/designsystem/' . self::get('wds_version') . '/build/dist/wsu-design-system.bundle.dist.js';
		$wsu_design_system_wordpress    = ( self::get('is_local') ) ? WDS_LOCALHOST_URL . '/bundles/dist/platforms/wsu-design-system.wordpress.bundle.dist.css' : 'https://cdn.web.wsu.edu/designsystem/' . self::get('wds_version') . '/build/dist/platforms/wsu-design-system.wordpress.bundle.dist.css';
		$wsu_design_system_gravityforms = ( self::get('is_local') ) ? WDS_LOCALHOST_URL . '/bundles/dist/platforms/wsu-design-system.wordpress.gravityforms.bundle.dist.css' : 'https://cdn.web.wsu.edu/designsystem/' . self::get('wds_version') . '/build/dist/platforms/wsu-design-system.wordpress.gravityforms.bundle.dist.css';
		$wsu_design_system_tablepress   = ( self::get('is_local') ) ? WDS_LOCALHOST_URL . '/bundles/dist/platforms/wsu-design-system.wordpress.tablepress.bundle.dist.css' : 'https://cdn.web.wsu.edu/designsystem/' . self::get('wds_version') . '/build/dist/platforms/wsu-design-system.wordpress.tablepress.bundle.dist.css';

		wp_enqueue_style( 'wsu_design_system_normalize', $wsu_design_system_normalize, array(), $version );

		wp_enqueue_style( 'wsu_design_system_icons', $wsu_design_system_icons, array(), $version );

		wp_enqueue_style( 'wsu_design_system_bundle', $wsu_design_system_bundle, array(), $version );

		wp_enqueue_style( 'wsu_design_system_temp', get_stylesheet_directory_uri() . '/temp-style.css', array(), $version );

		wp_enqueue_script( 'wsu_design_system_js', $wsu_design_system_js, array(), $version, true );

		if ( is_admin_bar_showing() ) {
			wp_enqueue_style( 'wsu_design_system_wordpress', $wsu_design_system_wordpress, array(), $version );
		}

		if ( function_exists('is_plugin_active') && is_plugin_active( 'gravityforms/gravityforms.php' ) ) {
			wp_enqueue_style( 'wsu_design_system_gravityforms', $wsu_design_system_gravityforms, array( 'gforms_formsmain_css', 'gforms_reset_css', 'gforms_datepicker_css', 'gforms_ready_class_css', 'gforms_browsers_css' ), $version );
		}

		if ( function_exists('is_plugin_active') && is_plugin_active( 'tablepress/tablepress.php' ) ) {
			wp_enqueue_style( 'wsu_design_system_tablepress', $wsu_design_system_tablepress, array( 'tablepress-default' ), $version );
		}

	}

	public static function enqueue_admin_scripts() {

		wp_enqueue_style( 'wsu_design_system_wordpress_admin', 'https://cdn.web.wsu.edu/designsystem/' . self::get('wds_version') . '/build/dist/platforms/wsu-design-system.wordpress.admin.bundle.dist.css', array(), Theme::get( 'version' ) );

	}

}

( new Scripts )->init();
