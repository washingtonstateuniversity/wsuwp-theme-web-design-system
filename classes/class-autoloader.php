<?php namespace WSUWP\Theme\Binder;

class Autoloader {

	public static function load_class( $class ) {

		// Only try to autoload in our own namespace
		if ( strpos( $class, __NAMESPACE__ ) !== false ) {

			$classes_dir = __DIR__;

			$class_array = explode( '\\', $class );

			$file_name = 'class-' . array_pop( $class_array ) . '.php';

			$file_name = strtolower( str_replace( '_', '-', $file_name ) );

			$class_file_path = $classes_dir . '/' . $file_name;

			if ( file_exists( $class_file_path ) ) {

				require_once $class_file_path;

			}// End if
		} // End if

	} // End load_class

} // End Autoloader

spl_autoload_register( __NAMESPACE__ .'\Autoloader::load_class' );
