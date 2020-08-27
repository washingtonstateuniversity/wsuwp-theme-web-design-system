<article class="wsu-c-search-results__item">
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<?php echo wp_kses_post( wp_trim_words( wp_strip_all_tags( get_the_excerpt() ), 25 ) ); ?>
</article>