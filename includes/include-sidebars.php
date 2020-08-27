<?php namespace WSUWP\Theme\WDS;


class Sidebars {


	public function init() {

		add_action( 'widgets_init', __CLASS__ . '::register_sidebars' );

	}


	public static function register_sidebars() {

		register_sidebar( 
			array(
			'name'          => 'Main Sidebar',
			'id'            => 'wsu_main_sidebar',
			'description'   => 'Widgets in this area will be shown on all posts and pages.',
			'before_widget' => '<div class="wsu-c-sidebar-widget__wrapper %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="wsu-c-sidebar-widget__title">',
			'after_title'   => '</h2>',
			)
		);

		register_sidebar( 
			array(
			'name'          => 'After Page content',
			'id'            => 'wsu_after_page_content',
			'description'   => 'Widgets in this area will be shown on all posts and pages after main content.',
			'before_widget' => '<div class="wsu-c-sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="wsu-c-sidebar-widget__title">',
			'after_title'   => '</h2>',
			)
		);

		register_sidebar( 
			array(
			'name'          => 'Before Page content',
			'id'            => 'wsu_before_page_content',
			'description'   => 'Widgets in this area will be shown on all posts and pages before main content.',
			'before_widget' => '<div class="wsu-c-sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="wsu-c-sidebar-widget__title">',
			'after_title'   => '</h2>',
			)
		);

	}

}

(new Sidebars)->init();
