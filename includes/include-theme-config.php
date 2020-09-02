<?php namespace WSUWP\Theme\WDS;


class Theme_Config {


	public function init() {

		add_action( 'after_setup_theme', __CLASS__ . '::theme_setup' );

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


}

( new Theme_Config() )->init();
