<?php get_header(); ?>
<!-- GLOBAL CONTAINER:START -->
<?php get_template_part( 'template-parts/wrappers/wsu-g-container-start', get_post_type() ); ?>
	<?php get_template_part( 'template-parts/global-header', get_post_type() ); ?>
	<?php get_template_part( 'template-parts/site-nav-vertical', get_post_type() ); ?>
	<!-- SITE WRAPPER:START -->
	<?php get_template_part( 'template-parts/wrappers/wsu-s-wrapper-start', get_post_type() ); ?>
		<!-- SITE CONTAINER:START -->
		<?php get_template_part( 'template-parts/site-header', get_post_type() ); ?>
		<?php get_template_part( 'template-parts/site-nav-horizontal', get_post_type() ); ?>
		<?php get_template_part( 'template-parts/hero-banner', get_post_type() ); ?>
		<?php get_template_part( 'template-parts/wrappers/wsu-s-main-container-start', get_post_type() ); ?>
			<?php get_template_part( 'template-parts/wrappers/wsu-c-container-side-right-start', get_post_type() ); ?>
				<div class="wsu-c-container__main">
				<?php get_template_part( 'template-parts/widget-areas/before-page-content.php', get_post_type() ); ?>
				<?php get_template_part( 'template-parts/search/search-results', get_post_type() ); ?>
				<?php get_template_part( 'template-parts/widget-areas/after-page-content.php', get_post_type() ); ?>
				</div>
				<aside class="wsu-c-container__aside">
				<?php get_template_part( 'template-parts/sidebar', get_post_type() ); ?>
				</aside>
			<?php get_template_part( 'template-parts/wrappers/wsu-c-container-end', get_post_type() ); ?>
		<?php get_template_part( 'template-parts/wrappers/wsu-s-main-container-end', get_post_type() ); ?>
		<!-- SITE CONTAINER:END -->
		<?php get_template_part( 'template-parts/site-footer', get_post_type() ); ?>
		<?php get_template_part( 'template-parts/global-footer', get_post_type() ); ?>
		<?php get_template_part( 'template-parts/wrappers/wsu-s-wrapper-end', get_post_type() ); ?>
	<!-- SITE WRAPPER:END -->
	<?php get_template_part( 'template-parts/wrappers/wsu-g-container-end', get_post_type() ); ?>
<!-- GLOBAL CONTAINER:END -->
<?php get_footer(); ?>