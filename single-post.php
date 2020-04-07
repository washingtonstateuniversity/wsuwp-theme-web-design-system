
<?php get_header(); ?>
<?php get_template_part( 'template-parts/global-header', get_post_type() ); ?>
<!-- GLOBAL CONTAINER:START -->
<div class="wsu-g-container">
	<?php get_template_part( 'template-parts/site-nav-vertical', get_post_type() ); ?>
	<!-- SITE WRAPPER:START -->
	<div class="wsu-s-wrapper">
		<!-- SITE CONTAINER:START -->
		<?php get_template_part( 'template-parts/site-header', get_post_type() ); ?>
		<?php get_template_part( 'template-parts/site-nav-horizontal', get_post_type() ); ?>
		<?php get_template_part( 'template-parts/hero-banner', get_post_type() ); ?>
		<div class="wsu-s-main-container">
			<div class="wsu-c-container wsu-c-content wsu-c-container--sidebar-right">
				<div class="wsu-c-container__main">
				<?php if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
						get_template_part( 'template-parts/single', get_post_type() );
					}
				} ?>
				</div>
				<aside class="wsu-c-container__aside">
				<?php get_template_part( 'template-parts/sidebar', get_post_type() ); ?>
				</aside>
			</div>
		</div>
		<!-- SITE CONTAINER:END -->
		<?php get_template_part( 'template-parts/site-footer', get_post_type() ); ?>
		<?php get_template_part( 'template-parts/global-footer', get_post_type() ); ?>
	</div>
	<!-- SITE WRAPPER:END -->
</div>
<!-- GLOBAL CONTAINER:END -->
<?php get_footer(); ?>
