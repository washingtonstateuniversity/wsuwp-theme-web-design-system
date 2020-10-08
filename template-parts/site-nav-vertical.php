<?php namespace WSUWP\Theme\WDS;

if (  get_theme_mod( 'wsu_wds_site_nav_vertical_is_split_button', false ) ) {

	Block_Site_Nav_Vertical_split::render_block(
		array()
	);
	

} else {

	Block_Site_Nav_Vertical::render_block(
		array(
			'is_active'  => get_theme_mod( 'wsu_wds_site_nav_vertical_is_active', 'default' ),
			'start_open' => get_theme_mod( 'wsu_wds_site_nav_vertical_start_open', 'default' ),
		)
	);

}
