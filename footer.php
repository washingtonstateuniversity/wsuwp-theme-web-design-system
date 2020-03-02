<?php

$demo_options = get_theme_mod( 'wsu_wsd_demo', array() );

?>
<?php if ( ! empty( $demo_options['is_demo'] ) ) : ?>
<script type='text/javascript' src='https://cdn.web.wsu.edu/designsystem/1.x/build/dist/wsu-design-system.bundle.dist.js?ver=<?php echo esc_attr( WSUWP\Theme\WDS\Theme::get_version() ); ?>'></script>
<style>
	/* For demo only */
	.gform_wrapper {
		border-top: 1px solid rgba(0,0,0,0.25);
		padding-top: 20px;
		margin-top: 20px;
		padding-bottom: 20px;
	}
	.gform_body ul {
		list-style-type: none;
		padding-inline-start: 0 !important;
	}
	.gfield {
		margin-bottom: 1rem;
	}
	.gfield textarea {
		width: 100%;
	}
</style>
<?php else : ?>
	<?php wp_footer(); ?>
<?php endif; ?>
</body>
</html>