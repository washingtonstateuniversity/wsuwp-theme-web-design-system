<?php namespace WSUWP\Theme\WDS;


class Theme_Config {


	public function init() {

		add_action( 'after_setup_theme', array( __CLASS__, 'theme_setup' ) );
		add_filter( 'document_title_parts', array( __CLASS__, 'filter_title' ) );
		add_filter( 'document_title_separator', array( __CLASS__, 'filter_title_separator' ) );
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

		add_theme_support( 'editor-color-palette', array() );

		add_theme_support( 'disable-custom-colors' );

		add_theme_support( 'disable-custom-font-sizes' );

		add_theme_support( 'editor-font-sizes', array() );

		add_theme_support( 'disable-custom-gradients' );

		add_theme_support( 'editor-gradient-presets', array() );

		remove_theme_support( 'core-block-patterns' );

	}


	public static function filter_title( $title ) {

		$title['tagline'] = 'Washington State University';

		return $title;

	}

	public static function filter_title_separator( $separator ) {

		return '|';

	}


}

( new Theme_Config() )->init();
