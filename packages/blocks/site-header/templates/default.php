<div class="wsu-s-header__wrapper">
	<header class="wsu-s-header__container">
		<?php if ( ! empty( $atts['title'] ) ) : ?>
			<div class="wsu-s-header__title">
				<?php echo wp_kses_post( $atts['title'] ); ?>
			</div>
		<?php endif; ?>
		<?php if ( ! empty( $atts['subtitle'] ) ) : ?>
			<div class="wsu-s-header__subtitle">
				<?php echo wp_kses_post( $atts['subtitle'] ); ?>
			</div>
		<?php endif; ?>
	</header>
</div>