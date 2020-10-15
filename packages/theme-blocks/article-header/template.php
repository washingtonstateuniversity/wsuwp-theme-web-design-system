<header class="wsu-c-article-header">
	<h1 class="wsu-c-article-header__title"><?php echo wp_kses_post( $atts['title'] ); ?></h1>
	<?php if ( ! empty( $atts['subtitle'] ) ) : ?>
	<div class="wsu-c-article-header__subtitle">
		<?php echo wp_kses_post( $atts['subtitle'] ); ?>
	</div>
	<?php endif; ?>
	<?php if ( ! empty( $atts['show_byline'] ) ) : ?>
	<div class="wsu-c-article-header__byline">
		<?php if ( ! empty( $atts['author_name'] ) ) : ?>
		<address class="wsu-c-meta-author">
			By
			<?php if ( ! empty( $atts['author_link'] ) ) : ?><a class="wsu-c-meta-author__link" href="<?php echo esc_url( $atts['author_link'] ); ?>" rel="author"><?php endif; ?>
				<span class="wsu-c-meta-author__name"><?php echo esc_html( $atts['author_name'] ); ?></span>
			<?php if ( ! empty( $atts['author_link'] ) ) : ?></a><?php endif; ?>
		</address>
		<?php endif; ?>
		<?php if ( ! empty( $atts['publish_date'] ) ) : ?>
		<time class="wsu-c-meta-publish-date" pubdate="<?php echo esc_html( $atts['publish_date'] ); ?>">
			<?php echo esc_html( $atts['publish_date'] ); ?>
		</time>
		<?php endif; ?>
	</div>
	<?php endif; ?>
</header>
