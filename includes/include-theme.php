<?php namespace WSUWP\Theme\Binder;


class Theme {


	protected static $version = '0.0.1.1';


	public function init() {

		require_once get_template_directory() . '/classes/class-menu.php';

		require_once __DIR__ . '/include-template.php';
		//require_once __DIR__ . '/include-menus.php';
		require_once __DIR__ . '/include-scripts.php';

	}


	public static function get_version() {

		return self::$version;

	} // End get_version

}

(new Theme)->init();
