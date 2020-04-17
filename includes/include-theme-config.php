<?php namespace WSUWP\Theme\WDS;


class Theme_Config {


	public function init() {

		add_action( 'after_setup_theme', __CLASS__ . '::theme_setup' );
		add_action('wp_enqueue_scripts', __CLASS__ . '::enqueue_scripts');

	}


	public static function enqueue_scripts() {

		wp_enqueue_style( 'wsuwpwebdesignsystem-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css') );

	}


	public static function theme_setup() {

		load_theme_textdomain( 'wsuwpwebdesignsystem' );

		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'title-tag' );

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);

	}


	// https://developer.wordpress.org/reference/hooks/big_image_size_threshold/
	public static function set_max_image_size( $threshold ) {

		// Set default image threshold down from 2560 to 1900px
		$threshold = 1900;

		return $threshold;

	}


	public static function register_menus() {

		register_nav_menus(
			array(
				'site_nav_horizontal' => 'Site Horizontal Navigation',
				'site_nav_vertical'  => 'Site Vertical Navigation',
			)
		);

	}

}

( new Theme_Config() )->init();
