<?php namespace WSUWP\Theme\WDS;

Block_Article_Header::render_block(
	array(
		'title' => get_the_title( get_the_ID() ),
		'publish_date' => get_the_date( '', get_the_ID() ),
	)
);
