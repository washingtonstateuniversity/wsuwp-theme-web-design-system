<?php namespace WSUWP\Theme\WDS;


Block_Site_Footer::render_block(
	array(
		'is_active' => get_theme_mod( 'wsu_wds_site_footer_is_active', true ),
	)
);

