
<?php get_header(); ?>
<?php get_template_part( 'demo/template-parts/global-header', get_post_type() ); ?>
<!-- GLOBAL CONTAINER:START -->
<div class="wsu-g-container">
	<?php get_template_part( 'demo/template-parts/site-nav-vertical', get_post_type() ); ?>
	<!-- SITE WRAPPER:START -->
	<div class="wsu-s-wrapper">
		<!-- SITE CONTAINER:START -->
		<?php get_template_part( 'demo/template-parts/site-header', get_post_type() ); ?>
		<?php get_template_part( 'demo/template-parts/site-nav-horizontal', get_post_type() ); ?>
		<div class="wsu-s-main-container">
			<div class="wsu-c-container">
			<div style="max-width: 800px; margin: 100px auto; display: flex; justify-content: space-evenly;">

				<div>
					<!-- COMPONENT:START -->
					<div class="wsu-c-button wsu-button-sm">
						<a href="#" class="wsu-c-button_link">Learn More</a>
					</div>
					<!-- COMPONENT:END -->

					<div style="padding: 20px;"></div>

					<!-- COMPONENT:START -->
					<div class="wsu-c-button_light wsu-button-sm">
						<a href="#" class="wsu-c-button_link">Learn More</a>
					</div>
					<!-- COMPONENT:END -->

					<div style="padding: 20px;"></div>

					<!-- COMPONENT:START -->
					<div class="wsu-c-button--round wsu-button-sm">
						<a href="#" class="wsu-c-button_link">Learn More</a>
					</div>
					<!-- COMPONENT:END -->

					<div style="padding: 20px;"></div>

					<!-- COMPONENT:START -->
					<div class="wsu-c-button_light--round wsu-button-sm">
						<a href="#" class="wsu-c-button_link">Learn More</a>
					</div>
					<!-- COMPONENT:END -->
				</div>
				<div>
					<!-- COMPONENT:START -->
					<div class="wsu-c-button">
						<a href="#" class="wsu-c-button_link">Learn More</a>
					</div>
					<!-- COMPONENT:END -->

					<div style="padding: 20px;"></div>

					<!-- COMPONENT:START -->
					<div class="wsu-c-button_light">
						<a href="#" class="wsu-c-button_link">Learn More</a>
					</div>
					<!-- COMPONENT:END -->

					<div style="padding: 20px;"></div>

					<!-- COMPONENT:START -->
					<div class="wsu-c-button--round">
						<a href="#" class="wsu-c-button_link">Learn More</a>
					</div>
					<!-- COMPONENT:END -->

					<div style="padding: 20px;"></div>

					<!-- COMPONENT:START -->
					<div class="wsu-c-button_light--round">
						<a href="#" class="wsu-c-button_link">Learn More</a>
					</div>
					<!-- COMPONENT:END -->
				</div>
				<div>
					<!-- COMPONENT:START -->
					<div class="wsu-c-button wsu-button-lg">
						<a href="#" class="wsu-c-button_link">Learn More</a>
					</div>
					<!-- COMPONENT:END -->

					<div style="padding: 20px;"></div>

					<!-- COMPONENT:START -->
					<div class="wsu-c-button_light wsu-button-lg">
						<a href="#" class="wsu-c-button_link">Learn More</a>
					</div>
					<!-- COMPONENT:END -->

					<div style="padding: 20px;"></div>

					<!-- COMPONENT:START -->
					<div class="wsu-c-button--round wsu-button-lg">
						<a href="#" class="wsu-c-button_link">Learn More</a>
					</div>
					<!-- COMPONENT:END -->

					<div style="padding: 20px;"></div>

					<!-- COMPONENT:START -->
					<div class="wsu-c-button_light--round wsu-button-lg">
						<a href="#" class="wsu-c-button_link">Learn More</a>
					</div>
					<!-- COMPONENT:END -->
				</div>
</div>
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
