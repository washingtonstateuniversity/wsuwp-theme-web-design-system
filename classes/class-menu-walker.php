<?php namespace WSUWP\Theme\WDS;

class Menu_Walker extends \Walker_Nav_Menu {

	function start_lvl( &$output, $depth=0, $args=null ) { 

		$output .= '<ul  class="wsu-s-nav-vertical-split__menu" role="menubar">';

	}

	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

		$permalink         = $item->url;
		$title             = $item->title;
		$is_current        = $item->current;
		$is_current_parent = $item->current_item_parent;
		$has_children      = in_array( 'menu-item-has-children', $item->classes, true );
		$aria_expanded     = ( $is_current || $is_current_parent ) ? 'true' : 'false';
		$aria_label        = ( 'true' === $aria_expanded ) ? 'Collapse Menu' : 'Expand Menu';

		$classes           = array( 'wsu-s-nav-vertical-split__menu-item-wrapper' );

		if ( $is_current ) {

			$classes[] = 'wsu-s-nav-vertical-split__menu-item--current';

		}

		if ( $is_current_parent ) {

			$classes[] = 'wsu-s-nav-vertical-split__menu-item--current-parent';
			
		}

		$output .= '<li class="' .  implode( ' ', $classes ) . '" role="menuitem" aria-expanded="' . $aria_expanded . '" aria-haspopup="true">';
		
		$output .= '<span class="wsu-s-nav-vertical-split__menu-item">';

		$output .= '<a href="' . $permalink . '" class="wsu-s-nav-vertical-split__menu-item-link">' . $title . '</a>';

		if ( $has_children ) {

			$output .= '<button class="wsu-s-nav-vertical-split__menu-toggle" aria-label="' . $aria_label . '"></button>';

		}

		$output .= '</span>';

	}

}