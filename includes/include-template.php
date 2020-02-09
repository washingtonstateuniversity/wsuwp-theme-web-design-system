<?php namespace WSUWP\Theme\Binder;

class Templates {

	// https://developer.wordpress.org/reference/functions/get_template_part/

	public static function get_template_part( $slug, $name = '', $post_type = '', $load = true ) {

		$templates = array();
		$name      = (string) apply_filters( 'wsuwp_get_template_part', $name, $slug, $post_type );

		// A $name of false will cause the template part not to render.
		if ( false !== $name ) {

			// Ignore if name is set to dynamic
			if ( '' !== $name && 'dynamic' !== $name ) {

				$templates[] = "{$slug}-{$name}.php";

			} elseif ( ! empty( $post_type ) ) {

				$templates[] = "{$slug}-{$post_type}.php";

			} // End if

			$templates[] = "{$slug}.php";

			if ( $load ) {

				// https://developer.wordpress.org/reference/functions/locate_template/
				locate_template( $templates, true, false );

			} else {

				// https://developer.wordpress.org/reference/functions/locate_template/
				return locate_template( $templates, false, false );

			} // End if
		} elseif ( false === $name && false === $load ) { // If $load is set to false and return empty string.

			return '';

		} // End if

	} // End get_template_part

}

$binder_templates = new Templates();
