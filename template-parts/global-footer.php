<?php namespace WSUWP\Theme\WDS;

Block_Global_Footer::render_block(
	array(
		'is_active' => get_theme_mod( 'wsu_wds_global_footer_is_active', true ),
	)
);

