<?php namespace WSUWP\Theme\WDS;

Block_Global_Header::render_block(
	array(
		'is_active' => get_theme_mod( 'wsu_wds_global_header_is_active', true ),
	)
);
