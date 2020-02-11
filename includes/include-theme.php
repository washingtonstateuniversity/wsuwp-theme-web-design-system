<?php namespace WSUWP\Theme\Binder;


class Theme {


	protected static $version = '0.0.2';


	public function init() {

		require_once __DIR__ . '/include-menus.php';
		require_once __DIR__ . '/include-scripts.php';
		require_once __DIR__ . '/include-components.php';

	}


	public static function get_version() {

		return self::$version;

	} // End get_version

}

(new Theme)->init();
