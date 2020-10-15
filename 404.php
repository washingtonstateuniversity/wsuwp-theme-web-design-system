
<?php get_header(); ?>
<!-- GLOBAL CONTAINER:START -->
<div class="wsu-g-container">
	<?php get_template_part( 'template-parts/global-header', get_post_type() ); ?>
	<?php get_template_part( 'template-parts/site-nav-vertical', get_post_type() ); ?>
	<!-- SITE WRAPPER:START -->
	<div class="wsu-s-container">
		<!-- SITE CONTAINER:START -->
		<div class="wsu-s-main-container">
			<div class="wsu-c-container wsu-c-content">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : ?>
						the_post();
						get_template_part( 'template-parts/content-single', get_post_type() );
					<?php endwhile; ?>
				<?php else : ?>
					<h1>Page Not Found</h1>
					<p>The address that you tried was not found. You may have used an outdated link or typed the URL incorrectly. Please try our site search or one of these links.</p>
					<ul>
						<li><a href="https://index.wsu.edu">The A-Z Directory</a> (an alphabetical list of departments, programs, resources, organizations, and more)</li>
						<li><a href="https://wsu.edu/academics/">Academic Departments</a> (a list of links to all academic departments)</li>
						<li><a href="https://wsu.edu/about/services/">Administrative Offices and Resources</a> (a list of links to all administrative offices and resources)</li>
						<li><a href="https://wsu.edu/admission/">Admissions and Aid</a> (information for prospective students about applying, tuition, financial aid, and more)</li>
						<li><a href="https://wsu.edu/contact/">Contact Us</a> (phone and email contacts)</li>
					</ul>
				<?php endif; ?>
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
