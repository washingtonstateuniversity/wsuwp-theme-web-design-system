<?php namespace WSUWP\Theme\WDS;

class Block_Article_Header extends Block {

	public static $default_atts = array(
		'is_active'         => true,
		'title'             => '',
		'subtitle'          => '',
		'author_name'       => '',
		'author_link'       => '',
		'publish_date'      => '',
		'show_byline'       => true,
		'hide_author'       => false,
		'hide_publish_date' => false,
	);


	protected static function render( $atts, $content ) {

		self::parse_block_atts( $atts );

		if ( ! empty( $atts['is_active'] ) ) {

			include __DIR__ . '/template.php';

		}

	}


	protected static function parse_block_atts( &$atts ) {

		// If hide author then set author to empty string
		if ( $atts['hide_author'] ) {

			$atts['author_name'] = '';

		}

		// If hide publish date then set publish_date to empty string
		if ( $atts['hide_publish_date'] ) {

			$atts['publish_date'] = '';

		}

		// If both author and date are empty, don't render the byline html
		if ( empty( $atts['author_name'] ) && empty( $atts['publish_date'] ) ) {

			$atts['show_byline'] = false;

		}

	}

}
