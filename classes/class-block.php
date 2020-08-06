<?php namespace WSUWP\Theme\WDS;

class Block {

	public static $key = 'side_header';
	public static $default_atts = array();


	protected static function render( $atts, $content ) {

		return $content;

	}


	public static function render_block( $atts = array(), $content = '', $echo = true ) {

		// parse_atts converts to snake case and fills in defaults
		static::parse_atts( $atts );

		if ( $echo ) {

			static::render( $atts, $content );

		} else {

			ob_start();

			static::render( $atts, $content );

			return ob_get_clean();

		}

	}


	protected static function to_snake_case( &$atts ) {

		// Turn camelCase into snake_case
		foreach ( $atts as $key => $value ) {

			$parts = preg_split( '/(?=[A-Z])/', $key, -1, PREG_SPLIT_NO_EMPTY );

			unset( $atts[ $key ] );

			$snake_key = strtolower( implode( '_', $parts ) );

			$atts[ $snake_key ] = $value;

		}

	}


	protected static function parse_atts( &$atts, $to_snake_case = true ) {

		if ( $to_snake_case ) {

			self::to_snake_case( $atts );

		}

		// Check that each default is set
		foreach ( static::$default_atts as $key => $value ) {

			if ( ! array_key_exists( $key, $atts ) || ( 'default' == $atts[ $key ] ) ) {

				$atts[ $key ] = $value;

			}
		}

	}

}