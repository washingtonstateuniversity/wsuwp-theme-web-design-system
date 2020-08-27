<?php namespace WSUWP\Theme\WDS; ?>

<?php get_template_part( 'template-parts/search/search-title', get_post_type() ); ?>

<?php get_template_part( 'template-parts/search/search-bar', get_post_type() ); ?>

<h2>Search Results</h2>

<?php if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/search/search-result', get_post_type() );
	}
} ?>
