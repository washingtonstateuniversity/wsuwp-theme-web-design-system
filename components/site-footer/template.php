<!-- COMPONENT:START -->
<div class="wsu-s-footer__wrapper">
	<footer class="wsu-s-footer__container">
		<?php if ( ! empty( $args['footer_title'] ) || ! empty( $args['footer_caption'] ) ) : ?>
		<div class="wsu-s-footer__overview-container">
			<?php if ( ! empty( $args['footer_title'] ) ) : ?><div class="wsu-s-footer__overview-title"><?php echo esc_html( $args['footer_title'] ); ?></div><?php endif; ?>
			<?php if ( ! empty( $args['footer_caption'] ) ) : ?><p class="wsu-s-footer__overview-desc"><?php echo wp_kses_post( $args['footer_caption'] ); ?></p><?php endif; ?>
		</div>
		<?php endif; ?>
		<?php if ( ! empty( $args['menu'] ) ) : ?>
		<nav class="wsu-s-footer__nav">
			<ul class="wsu-s-footer_nav-list">
				<?php foreach ( $args['menu'] as $parent_item ): ?>
				<li class="wsu-s-footer__nav-item<?php if ( ! empty( $parent_item['children'] ) ) : ?>--has-children<?php endif; ?>">
					<a href="<?php echo esc_url( $parent_item['url'] ); ?>" class="wsu-s-footer__nav-link">
						<?php echo esc_html( $parent_item['title'] ); ?>
					</a>
					<?php if ( ! empty( $parent_item['children'] ) ) : ?>
					<ul class="wsu-s-footer__sub-menu">
						<?php foreach ( $parent_item['children'] as $child_item ): ?>
						<li class="wsu-s-footer__nav-item">
							<a href="<?php echo esc_url( $child_item['url'] ); ?>" class="wsu-s-footer__nav-link">
								<?php echo esc_html( $child_item['title'] ); ?>
							</a>
						</li>
						<?php endforeach; ?>
					</ul>
					<?php endif; ?>
				</li>
				<?php endforeach; ?>
			</ul>
		</nav>
		<?php endif; ?>
		<div class="wsu-s-footer__contact-container">
			<p class="wsu-s-footer__contact-info">
				<?php if ( ! empty( $args['unit_name'] ) ) : ?><span class="wsu-s-footer__name"><?php echo esc_html( $args['unit_name'] ); ?></span><?php endif; ?>
				<?php if ( ! empty( $args['address_1'] ) ) : ?><span class="wsu-s-footer__address_1"><?php echo esc_html( $args['address_1'] ); ?></span><?php endif; ?>
				<?php if ( ! empty( $args['address_2'] ) ) : ?><span class="wsu-s-footer__address_2"><?php echo esc_html( $args['address_2'] ); ?></span><?php endif; ?>
				<?php if ( ! empty( $args['email'] ) ) : ?><span class="wsu-s-footer__contact-email"><a href="mailto:<?php echo esc_attr( $args['email'] ); ?>" class="wsu-s-footer__contact-email__link">E <?php echo esc_html( $args['email'] ); ?></a></span><?php endif; ?>
				<?php if ( ! empty( $args['phone'] ) ) : ?><span class="wsu-s-footer__contact-phone"><a href="tel:<?php echo esc_attr( $args['phone'] ); ?>" class="wsu-s-footer__contact-phone__link">P <?php echo esc_html( $args['phone'] ); ?></a></span><?php endif; ?>
				<?php if ( ! empty( $args['fax'] ) ) : ?><span class="wsu-s-footer__contact-fax"><a href="tel:<?php echo esc_attr( $args['fax'] ); ?>" class="wsu-s-footer__contact-fax__link">F <?php echo esc_html( $args['fax'] ); ?></a></span><?php endif; ?>
			</p>
			<ul class="wsu-s-footer__social-list">

				<?php foreach ( array( 'one', 'two', 'three', 'four' ) as $location ) : ?>
				<?php if ( ! empty( $args['channel_' . $location ] ) && ! empty( $args['channel_' . $location . '_link' ] ) ) : ?>
				<li class="wsu-s-footer__social-list-item">
					<a href="#" class="wsu-s-footer__social-item-link">
						<span class="wsu-icon wsu-i-social-<?php echo esc_attr( $args[ 'channel_' . $location ] ); ?>"></span>
					</a>
				</li>
				<?php endif; ?>
				<?php endforeach; ?>
			</ul>
		</div>

	</footer>
	<div class="wsu-s-footer__coug-watermark">
		<svg role="img" aria-labelledby="wsuLogoTitle wsuLogoDesc" class="wsu-s-footer__logo-svg" enable-background="new 0 0 70.2 69.6" version="1.1" viewBox="0 0 70.2 69.6" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
			<title id="wsuLogoTitle">WSU Cougar Head Logo</title>
			<desc id="wsuLogoDesc">Originally created in 1936 by Randall Johnson, the Cougar Head remains a unique and distinguished part of the WSU identity.</desc>
			<path class="st0" d="m42.8 69.6s3.6-1.5 5.5-7.4c1 2.3 1.5 4.8 1.3 7.3-2.3 0.1-4.5 0.2-6.8 0.1zm14.9-11.8c-10.4 1.4-12.2-20.3-12.2-20.3s3.5 11.1 10.9 10.7c7.7-0.4 5.5-12.2 5.5-12.2s7.5 20.2-4.2 21.8zm-47.7-5c-3.3 1-6.6 1.8-10 2.4 0 0 5.9-4.5 10.3-18.3l4.3 3.9-0.8 2.6c1.1 1.5 1.9 3.1 2.5 4.9 1.6-3.6 1.5-7.7-0.3-11.2l-0.5 1.6-1.7-1.5-2.8-2.7c1.2-3.6 3-7 5.3-10.1l0.4 0.4 3.3 3.8-1 1.7c1.5 1.7 2.9 3.4 4.2 5.3 0.6-3.4 0.4-6.8-0.4-10.1l-1.5 1.4-3.6-4.2c4.5-4.7 10-8.2 16.2-10.3-0.4 0.4-0.7 0.8-1 1.3-2 2.9-4.1 8.1-2.4 16.4 0.3 1.3 0.7 3.2 1.1 5.1 0.9 3.8 1.9 8.2 2.2 10.9 0.7 5.7 0.1 9.4-1.8 11.4-1.3 1.4-3.5 2-6.4 1.9v-1.4c0-2.4-0.3-4.8-0.8-7.2l-0.8-2.7-1.2 2.6c-1.9 4.1-8.6 14.1-17.2 16.1 2.6-4.2 4.1-9 4.4-14zm25.4 16.4h-0.5-0.1-0.3c-0.5 0-0.8-0.1-1.2-0.1-0.7-0.1-1.6-0.2-2.6-0.4-6.4-1.1-12.9-1.7-19.4-2 6.2-3.6 10.4-9.9 12-12.5 0.2 1.3 0.3 2.5 0.3 3.8 0 0.8 0 1.6-0.1 2.2l-0.1 1.1 1.1 0.1c0.7 0.1 1.3 0.1 1.9 0.1 3.3 0 5.7-0.8 7.3-2.5 2.4-2.5 3.1-6.7 2.3-13.1-0.4-2.9-1.4-7.4-2.3-11.1-0.5-2-0.9-3.8-1.1-5-1.5-7.6 0.3-12.3 2.1-14.8 1.3-1.9 3.2-3.4 5.5-4.2h0.1l3.3-10.8div.1l-2.3 10.3c0.7-0.1 1.2-0.2 1.7-0.3l3-9.5div.1l-2 9.2c2.9-0.4 6.1-0.7 10.3-1 0.8 0.4 1.4 1.1 1.8 1.9l9.8-3 0.4 1.1-9.5 3.7c0.1 0.2 0.2 0.4 0.2 0.6l10.3-1.3 0.2 1.1-10 2c0 0.2 0.1 0.4 0.1 0.6l10.4 0.3v1.1l-10.2 0.4c0 1.2-0.2 2.4-0.5 3.6 0.6 2.1 0.7 4.3 0.3 6.5-1.7-3.9-3-5.1-3-5.1-1.4-0.7-2.9-1-4.5-1-2.5 0-4.8 1.1-6.4 2.9-2.3 2.6-3.5 6-3.3 9.5 0.2 2.4 0.7 5.1 1.4 8.6 0.7 3.6 1.6 8.1 2.3 13.5 0.6 4.1-0.1 7.3-1.8 9.7-1.6 2.1-4 3.4-6.5 3.8h-0.1-0.2-0.1-2.2zm10.4-51.5c-2.1-0.1-4.2 0.4-6 1.3-1.5 1-2.5 2.7-2.6 4.5-0.1 0.6-0.1 1.2 0 1.8 0.8-1.5 2-2.8 3.3-3.9 2.4-1.5 5.1-2.3 7.9-2.4h0.9 0.3c0.4 0 0.7-0.1 0.8-0.2 0-0.1-0.1-0.3-0.4-0.4-1.3-0.5-2.7-0.8-4.2-0.7z" />
		</svg>
	</div>
</div>
<!-- COMPONENT:END -->
