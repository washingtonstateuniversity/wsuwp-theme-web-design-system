<!-- COMPONENT:START -->
<div class="wsu-s-nav-vertical__wrapper wsu-u-no-js <?php echo esc_attr( $args['wrapper_class'] ); ?>">
	<nav class="wsu-s-nav-vertical__nav-container" aria-label="Vertical Site Navigation">
		<a href="#" class="wsu-s-nav-vertical__nav-container-close-link">
			<span class="wsu-icon wsu-i-x-close"></span>
			<span class="wsu-s-nav-vertical__nav-container-close-label">Close</span>
		</a>
		<ul class="wsu-s-nav-vertical__nav-list-container" id="wsu-s-nav-vertical" role="menubar" aria-label="Vertical Site Navigation">
			<?php foreach ( $menu_items as $first_level_item ) : ?>
			<li class="wsu-s-nav-vertical__nav-item<?php if ( ! empty( $first_level_item['children'] ) ) : ?>--has-children<?php endif; ?>" role="none">
				<a 
					href="<?php echo esc_url( $first_level_item['url'] ); ?>" 
					class="wsu-s-nav-vertical__nav-link<?php if ( $first_level_item['is_current_item'] ) : ?>--active<?php endif; ?>"
					<?php if ( $first_level_item['is_current_item'] || $first_level_item['is_current_ancestor'] ) : ?>tabindex="-1" aria-expanded="true"<?php endif; ?>
					role="menuitem">
					<?php echo esc_html( $first_level_item['title'] ); ?>
				</a>
				<?php if ( ! empty( $first_level_item['children'] ) ) : ?>
				<ul class="wsu-s-nav-vertical__nav-list" role="menu" aria-label="Replace Me w/ Link Name Submenu">
					<?php foreach ( $first_level_item['children'] as $second_level_item ) : ?>
					<li class="wsu-s-nav-vertical__nav-item<?php if ( ! empty( $second_level_item['children'] ) ) : ?>--has-children<?php endif; ?>" role="none">
						<a 
							href="<?php echo esc_url( $second_level_item['url'] ); ?>" 
							class="wsu-s-nav-vertical__nav-link<?php if ( $second_level_item['is_current_item'] ) : ?>--active<?php endif; ?>"
							<?php if ( $second_level_item['is_current_item'] || $second_level_item['is_current_ancestor'] ) : ?>tabindex="-1" aria-expanded="true"<?php endif; ?>
							>
							<?php echo esc_html( $second_level_item['title'] ); ?>
						</a>
						<?php if ( ! empty( $second_level_item['children'] ) ) : ?>
						<ul class="wsu-s-nav-vertical__nav-list" role="menu" aria-label="Replace Me w/ Link Name Submenu">
							<?php foreach ( $second_level_item['children'] as $third_level_item ) : ?>
							<li class="wsu-s-nav-vertical__nav-item" role="none">
								<a 
									href="<?php echo esc_url( $third_level_item['url'] ); ?>" 
									class="wsu-s-nav-vertical__nav-link<?php if ( $third_level_item['is_current_item'] ) : ?>--active<?php endif; ?>"
									<?php if ( $third_level_item['is_current_item'] || $third_level_item['is_current_ancestor'] ) : ?>tabindex="-1" aria-expanded="true"<?php endif; ?>
									>
									<?php echo esc_html( $third_level_item['title'] ); ?>
								</a>
							</li>
							<?php endforeach; ?>
						</ul>
						<?php endif; ?>
					</li>
					<?php endforeach; ?>
				</ul>
				<?php endif; ?>
			</li>
			<?php endforeach; ?>
		</ul>
	</nav>
	<a class="wsu-s-nav-vertical__menu-icon-link" href="#" aria-haspopup="true" aria-expanded="true">
		<div class="wsu-s-nav-vertical__menu-icon-container">
			<div class="wsu-s-nav-vertical__menu-icon-bar"></div>
			<div class="wsu-s-nav-vertical__menu-icon-bar"></div>
			<div class="wsu-s-nav-vertical__menu-icon-bar"></div>
		</div>
		<span class="wsu-s-nav-vertical__menu-label"></span>
	</a>
</div>
<!-- COMPONENT:END -->
