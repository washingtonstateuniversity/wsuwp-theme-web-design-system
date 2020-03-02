<?php

$demo_options = get_theme_mod( 'wsu_wsd_demo', array() );

if ( ! empty( $demo_options['is_demo'] ) ) { 

	get_template_part( 'demo/template-parts/header', get_post_type() );

} else {

	get_template_part( 'template-parts/header', get_post_type() );

}
