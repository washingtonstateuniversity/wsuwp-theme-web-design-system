<!-- COMPONENT:START -->
<div class="wsu-s-nav-horizontal__wrapper wsu-u-no-js">
	<nav class="wsu-s-nav-horizontal__nav-container" aria-label="Horizontal Site Navigation">
		<ul class="wsu-s-nav-horizontal__nav-list" id="wsu-s-nav-horizontal" role="menubar" aria-label="Horizontal Site Navigation">
			<?php foreach ( $menu_items as $first_level_item ) : ?>
			<li class="wsu-s-nav-horizontal__nav-item<?php if ( ! empty( $first_level_item['children'] ) ) : ?>--has-children<?php endif; ?>" role="none">
				<a 
					href="<?php echo esc_url( $first_level_item['url'] ); ?>" 
					class="wsu-s-nav-horizontal__nav-link<?php if ( $first_level_item['is_current_item'] ) : ?>--active<?php endif; ?>" 
					role="menuitem"
					<?php if ( ! empty( $first_level_item['children'] ) ) : ?>aria-haspopup="true" aria-expanded="true"<?php endif; ?>
					>
					<?php echo esc_html( $first_level_item['title'] ); ?>
				</a>
				<?php if ( ! empty( $first_level_item['children'] ) ) : ?>
				<ul class="wsu-s-nav-horizontal__nav-list" role="menu" aria-label="Replace Me w/ Link Name Submenu">
					<?php foreach ( $first_level_item['children'] as $second_level_item ) : ?>
					<li class="wsu-s-nav-horizontal__nav-item<?php if ( ! empty( $second_level_item['children'] ) ) : ?>--has-children<?php endif; ?>" role="none">
						<a 
							href="<?php echo esc_url( $second_level_item['url'] ); ?>" 
							class="wsu-s-nav-horizontal__nav-link<?php if ( $second_level_item['is_current_item'] ) : ?>--active<?php endif; ?>"
							<?php if ( ! empty( $second_level_item['children'] ) ) : ?>aria-haspopup="true" aria-expanded="true"<?php endif; ?>
							>
							<?php echo esc_html( $second_level_item['title'] ); ?>
						</a>
						<?php if ( ! empty( $second_level_item['children'] ) ) : ?>
						<ul class="wsu-s-nav-vertical__nav-list" role="menu" aria-label="Replace Me w/ Link Name Submenu">
							<?php foreach ( $second_level_item['children'] as $third_level_item ) : ?>
							<li class="wsu-s-nav-horizontal__nav-item" role="none">
								<a 
									href="<?php echo esc_url( $third_level_item['url'] ); ?>" 
									class="wsu-s-nav-horizontal__nav-link<?php if ( $third_level_item['is_current_item'] ) : ?>--active<?php endif; ?>"
									<?php if ( ! empty( $third_level_item['children'] ) ) : ?>aria-haspopup="true" aria-expanded="true"<?php endif; ?>
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
</div>
<!-- COMPONENT:END -->
