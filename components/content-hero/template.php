<div class="wsu-c-hero__wrapper wsu-c-full-width wsu-u-no-js">
	<div class="wsu-c-hero__container" style="background-image: url('<?php echo esc_attr( $args['img_src'] ); ?>');">
		<div class="wsu-c-hero__content">
			<?php if ( ! empty( $args['title'] ) ) : ?><div class="wsu-c-hero__title"><?php echo wp_kses_post( $args['title'] ); ?></div><?php endif; ?>
			<?php if ( ! empty( $args['subtitle'] ) ) : ?><div class="wsu-c-hero__subtitle"><?php echo wp_kses_post( $args['subtitle'] ); ?></div><?php endif; ?>
			<?php if ( ! empty( $args['button_text'] ) ) : ?><a href="#" class="wsu-c-hero__button"><?php echo wp_kses_post( $args['button_text'] ); ?></a><?php endif; ?>
		</div>
		<?php if ( ! empty( $args['button_text'] ) ) : ?><p class="wsu-c-hero__image-caption"><?php echo wp_kses_post( $args['caption_text'] ); ?></p><?php endif; ?>
	</div>
</div>
