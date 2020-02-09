<?php namespace WSUWP\Theme\Binder; ?>
<?php get_header(); ?>
<?php Templates::get_template_part( 'template-parts/global-header', 'dynamic', get_post_type() ); ?>
<!-- GLOBAL CONTAINER:START -->
<div class="wsu-g-container">
	<?php Templates::get_template_part( 'template-parts/site-nav-vertical', 'dynamic', get_post_type() ); ?>
	<!-- SITE WRAPPER:START -->
	<div class="wsu-s-wrapper">
		<!-- SITE CONTAINER:START -->
		<?php Templates::get_template_part( 'template-parts/site-header', 'dynamic', get_post_type() ); ?>
		<?php Templates::get_template_part( 'template-parts/site-nav-horizontal', 'dynamic', get_post_type() ); ?>
		<div class="wsu-s-main-container">
			<div class="wsu-c-header">
				<!-- [ content header area ] -->
			</div>
			<div class="wsu-c-container" style="padding: 0 40px;">
			</div>
		</div>
		<!-- SITE CONTAINER:END -->
		<?php Templates::get_template_part( 'template-parts/site-footer', 'dynamic', get_post_type() ); ?>
		<?php Templates::get_template_part( 'template-parts/global-footer', 'dynamic', get_post_type() ); ?>
	</div>
	<!-- SITE WRAPPER:END -->
</div>
<!-- GLOBAL CONTAINER:END -->
<?php get_footer(); ?>
