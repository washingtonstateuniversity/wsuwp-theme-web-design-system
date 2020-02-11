
<?php get_header(); ?>
<?php get_template_part( 'demo/template-parts/global-header', get_post_type() ); ?>
<!-- GLOBAL CONTAINER:START -->
<div class="wsu-g-container">
	<!-- SITE WRAPPER:START -->
	<div class="wsu-s-wrapper">
		<!-- SITE CONTAINER:START -->
		<?php get_template_part( 'demo/template-parts/site-header', get_post_type() ); ?>
		<div class="wsu-s-main-container">
			<div class="wsu-c-container">
			<?php get_template_part( 'demo/template-parts/columns', get_post_type() ); ?>
			<?php if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					get_template_part( 'demo/template-parts/content-single', get_post_type() );
				}
			} ?>
			</div>
		</div>
		<!-- SITE CONTAINER:END -->
		<?php get_template_part( 'demo/template-parts/site-footer', get_post_type() ); ?>
		<?php get_template_part( 'demo/template-parts/global-footer', get_post_type() ); ?>
	</div>
	<!-- SITE WRAPPER:END -->
</div>
<!-- GLOBAL CONTAINER:END -->
<?php get_footer(); ?>
