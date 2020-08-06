<?php namespace WSUWP\Theme\WDS;


class Blocks {


	public static function init() {

		require_once get_template_directory() . '/classes/class-block.php';

		$block_dir = get_template_directory() . '/packages/blocks/';

		require_once $block_dir . 'site-header/site-header.php';
		require_once $block_dir . 'site-nav-vertical/site-nav-vertical.php';

	}



}

( new Blocks() )->init();
