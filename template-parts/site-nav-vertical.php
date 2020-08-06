<?php namespace WSUWP\Theme\WDS;

Block_Site_Nav_Vertical::render_block(
	array(
		'is_active'  => get_theme_mod( 'wsu_wds_site_nav_vertical_is_active', 'default' ),
		'start_open' => get_theme_mod( 'wsu_wds_site_nav_vertical_start_open', 'default' ),
	)
);
