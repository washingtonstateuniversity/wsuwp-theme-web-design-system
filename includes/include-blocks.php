<?php namespace WSUWP\Theme\WDS;


class Blocks {


	public function __construct() {
		
		$block_dir = get_template_directory() . '/packages/theme-blocks/';

		require_once get_template_directory() . '/classes/class-block.php';
		require_once $block_dir . 'site-header/site-header.php';
		require_once $block_dir . 'site-footer/site-footer.php';
		require_once $block_dir . 'site-nav-vertical/site-nav-vertical.php';
		require_once $block_dir . 'global-header/global-header.php';
		require_once $block_dir . 'global-footer/global-footer.php';
		require_once $block_dir . 'site-nav-vertical-split/site-nav-vertical-split.php';
		require_once $block_dir . 'article-header/article-header.php';

	}


	public function init() {

		// Do init stuff here

	}



}

( new Blocks() )->init();
