<!-- COMPONENT:START -->
<div class="wsu-s-header__wrapper">
	<header class="wsu-s-header__container">
		<?php if ( ! empty( $args['site_title'] ) ) : ?>
		<div class="wsu-s-header__title">
			<?php echo wp_kses_post( $args['site_title'] ); ?>
		</div>
		<?php endif; ?>
		<?php if ( ! empty( $args['site_subtitle'] ) ) : ?>
		<div class="wsu-s-header__subtitle">
			<?php echo wp_kses_post( $args['site_subtitle'] ); ?>
		</div>
		<?php endif; ?>
	</header>
</div>
<!-- COMPONENT:END -->
