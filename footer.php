<?php

$demo_options = get_theme_mod( 'wsu_wsd_demo', array() );

?>
<?php if ( ! empty( $demo_options['is_demo'] ) ) : ?>
<script type='text/javascript' src='https://cdn.web.wsu.edu/designsystem/1.x/build/dist/wsu-design-system.bundle.dist.js?ver=<?php echo esc_attr( WSUWP\Theme\Binder\Theme::get_version() ); ?>'></script>
<?php else : ?>
	<?php wp_footer(); ?>
<?php endif; ?>
</body>
</html>