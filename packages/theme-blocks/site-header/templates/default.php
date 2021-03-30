<div class="wsu-s-header__wrapper">
	<header class="wsu-s-header__container">
		<?php if ( ! empty( $atts['title'] ) ) : ?>
			<div class="wsu-s-header__title">
				<?php if ( ! empty( $atts['title_is_linked'] ) ) : ?><a href="<?php echo esc_url( $atts['link_site_title'] ); ?>"><?php endif; ?>
					<?php echo wp_kses_post( $atts['title'] ); ?>
				<?php if ( ! empty( $atts['title_is_linked'] ) ) : ?></a><?php endif; ?>
			</div>
		<?php endif; ?>
		<?php if ( ! empty( $atts['subtitle'] ) ) : ?>
			<div class="wsu-s-header__subtitle">
				<?php if ( ! empty( $atts['link_site_subtitle'] ) ) : ?><a href="<?php echo esc_url( $atts['link_site_subtitle'] ); ?>"><?php endif; ?>
				<?php echo wp_kses_post( $atts['subtitle'] ); ?>
				<?php if ( ! empty( $atts['link_site_subtitle'] ) ) : ?></a><?php endif; ?>
			</div>
		<?php endif; ?>
	</header>
</div>