<?php

$demo_options = get_theme_mod( 'wsu_wsd_demo', array() );

?>
<html lang="en-US">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Design System Demo</title>
	<?php if ( ! empty( $demo_options['is_demo'] ) ) : ?>
	<link rel='stylesheet' id='wsu_design_system_normalize-css'  href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css?ver=<?php echo esc_attr( WSUWP\Theme\Binder\Theme::get_version() ); ?>' type='text/css' media='all' />
	<link rel='stylesheet' id='wsu_design_system_containers-css'  href='https://cdn.web.wsu.edu/designsystem/1.x/assets/css/wsu-design-system-containers.css?ver=<?php echo esc_attr( WSUWP\Theme\Binder\Theme::get_version() ); ?>' type='text/css' media='all' />
	<link rel='stylesheet' id='wsu_design_system_icons-css'  href='https://cdn.web.wsu.edu/designsystem/1.x/wsu-icons/dist/wsu-icons.bundle.css?ver=<?php echo esc_attr( WSUWP\Theme\Binder\Theme::get_version() ); ?>' type='text/css' media='all' />
	<link rel='stylesheet' id='wsu_design_system_bundle-css'  href='https://cdn.web.wsu.edu/designsystem/1.x/build/dist/wsu-design-system.bundle.dist.css?ver=<?php echo esc_attr( WSUWP\Theme\Binder\Theme::get_version() ); ?>' type='text/css' media='all' />
	<?php else : ?>
		<?php wp_head(); ?>
	<?php endif; ?>
	<style>
		/* For Demo Only */
		@media only screen and (max-width: 767px) {
			.wsu-c-column, .wsu-c-column--half, .wsu-c-column__grid--1, .wsu-c-column__grid--2, .wsu-c-column__grid--3, .wsu-c-column__grid--4, .wsu-c-column__grid--5, .wsu-c-column__grid--6, .wsu-c-column__grid--7, .wsu-c-column__grid--8, .wsu-c-column__grid--9, .wsu-c-column__grid--10, .wsu-c-column__grid--11, .wsu-c-column__grid--12, .wsu-c-column--two-third, .wsu-c-column--half, .wsu-c-column--third, .wsu-c-column--quarter {
				width: 100%;
			}
		}
		.wsu-c-column, .wsu-c-column--half, .wsu-c-column__grid--1, .wsu-c-column__grid--2, .wsu-c-column__grid--3, .wsu-c-column__grid--4, .wsu-c-column__grid--5, .wsu-c-column__grid--6, .wsu-c-column__grid--7, .wsu-c-column__grid--8, .wsu-c-column__grid--9, .wsu-c-column__grid--10, .wsu-c-column__grid--11, .wsu-c-column__grid--12, .wsu-c-column--two-third, .wsu-c-column--half, .wsu-c-column--third, .wsu-c-column--quarter {
			box-sizing: border-box;
		}
		.wsu-c-column__wrapper {
			flex-wrap: wrap;
		}
	</style>
</head>
<body>