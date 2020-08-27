<?php namespace WSUWP\Theme\WDS;

Block_Site_Header::render_block(
	array(
		'title'     => get_bloginfo( 'name' ),
		'subtitle'  => get_bloginfo( 'description' ),
		'on_home'   => true,
		'is_active' => get_theme_mod( 'wsu_wds_site_header_is_active', true ),
	)
);
