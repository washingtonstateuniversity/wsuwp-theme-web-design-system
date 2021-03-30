<?php namespace WSUWP\Theme\WDS;

Block_Site_Header::render_block(
	array(
		'title'     => get_bloginfo( 'name' ),
		'subtitle'  => get_bloginfo( 'description' ),
		'on_home'   => get_theme_mod( 'wsu_wds_site_header_on_home', true ),
		'is_active' => get_theme_mod( 'wsu_wds_site_header_is_active', true ),
		'link_site_title' => get_theme_mod( 'wsu_wds_site_header_link', get_bloginfo( 'url' ) ),
		'link_site_subtitle' => get_theme_mod( 'wsu_wds_site_header_link_subtitle', '' ),
		'title_is_linked' => get_theme_mod( 'wsu_wds_site_header_title_is_linked', true ),
	)
);
