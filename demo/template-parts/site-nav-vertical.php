<!-- COMPONENT:START -->
<div class="wsu-s-nav-vertical__wrapper wsu-u-no-js <?php echo esc_attr( $wrapper_class ); ?> is-demo">
	<nav class="wsu-s-nav-vertical__nav-container" aria-label="Vertical Site Navigation">
		<a href="#" class="wsu-s-nav-vertical__nav-container-close-link">
			<span class="wsu-icon wsu-i-x-close"></span>
			<span class="wsu-s-nav-vertical__nav-container-close-label">Close</span>
		</a>
		<ul class="wsu-s-nav-vertical__nav-list-container" id="wsu-s-nav-vertical" role="menubar" aria-label="Vertical Site Navigation">
			<li class="wsu-s-nav-vertical__nav-item" role="none">
				<a href="<?php echo get_site_url(); ?>/demo-home" class="wsu-s-nav-vertical__nav-link" role="menuitem">Home</a>
			</li>
			<li class="wsu-s-nav-vertical__nav-item--has-children" role="none">
				<a href="<?php echo get_site_url(); ?>#" class="wsu-s-nav-vertical__nav-link" role="menuitem" aria-haspopup="true" aria-expanded="true">Navigation Examples</a>
				<ul class="wsu-s-nav-vertical__nav-list" role="menu" aria-label="Replace Me w/ Link Name Submenu">
					<li class="wsu-s-nav-vertical__nav-item" role="none">
						<a href="<?php echo get_site_url(); ?>/demo-nav-start-open" class="wsu-s-nav-vertical__nav-link">Vertical Start Open</a>
					</li>
					<li class="wsu-s-nav-vertical__nav-item" role="none">
						<a href="<?php echo get_site_url(); ?>/demo-nav-start-closed" class="wsu-s-nav-vertical__nav-link">Vertical Start Closed</a>
					</li>
					<li class="wsu-s-nav-vertical__nav-item" role="none">
						<a href="<?php echo get_site_url(); ?>/demo-nav-vertical-only" class="wsu-s-nav-vertical__nav-link">Vertical Only</a>
					</li>
					<li class="wsu-s-nav-vertical__nav-item" role="none">
						<a href="<?php echo get_site_url(); ?>/demo-nav-horizontal-only" class="wsu-s-nav-vertical__nav-link">Horizontal Only</a>
					</li>
					<li class="wsu-s-nav-vertical__nav-item" role="none">
						<a href="<?php echo get_site_url(); ?>/demo-nav-none" class="wsu-s-nav-vertical__nav-link">No Navigation</a>
					</li>
					<li class="wsu-s-nav-vertical__nav-item--has-children" role="none">
						<a href="#" class="wsu-s-nav-vertical__nav-link">Second Level Nav Item</a>
						<ul class="wsu-s-nav-vertical__nav-list" role="menu" aria-label="Replace Me w/ Link Name Submenu">
							<li class="wsu-s-nav-vertical__nav-item" role="none">
								<a href="#" class="wsu-s-nav-vertical__nav-link">Third Level Nav Item 1</a>
							</li>
							<li class="wsu-s-nav-vertical__nav-item" role="none">
								<a href="#" class="wsu-s-nav-vertical__nav-link">Third Level Nav Item 2</a>
							</li>
							<li class="wsu-s-nav-vertical__nav-item" role="none">
								<a href="#" class="wsu-s-nav-vertical__nav-link">Third Level Nav Item 3</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="wsu-s-nav-vertical__nav-item--has-children" role="none">
				<a href="#" class="wsu-s-nav-vertical__nav-link--active" role="menuitem" aria-haspopup="true" aria-expanded="true" tabindex="-1">Content Components</a>
				<ul class="wsu-s-nav-vertical__nav-list" role="menu" aria-label="Replace Me w/ Link Name Submenu">
					<li class="wsu-s-nav-vertical__nav-item--has-children" role="none">
						<a href="#" class="wsu-s-nav-vertical__nav-link">Banners</a>
						<ul class="wsu-s-nav-vertical__nav-list" role="menu" aria-label="Replace Me w/ Link Name Submenu">
							<li class="wsu-s-nav-vertical__nav-item" role="none">
								<a href="<?php echo get_site_url(); ?>/demo-banner-overlay" class="wsu-s-nav-vertical__nav-link">Overlay Banner</a>
							</li>
						</ul>
					</li>
					<li class="wsu-s-nav-vertical__nav-item" role="none">
						<a href="<?php echo get_site_url(); ?>/demo-buttons" class="wsu-s-nav-vertical__nav-link">Buttons</a>
					</li>
				</ul>
			</li>
			<li class="wsu-s-nav-vertical__nav-item--has-children" role="none">
				<a href="#" class="wsu-s-nav-vertical__nav-link" role="menuitem">Footer Examples</a>
				<ul class="wsu-s-nav-vertical__nav-list" role="menu" aria-label="Replace Me w/ Link Name Submenu">
					<li class="wsu-s-nav-vertical__nav-item" role="none">
						<a href="<?php echo get_site_url(); ?>/demo-site-footer" class="wsu-s-nav-vertical__nav-link">Full Site Footer</a>
					</li>
					<li class="wsu-s-nav-vertical__nav-item" role="none">
						<a href="<?php echo get_site_url(); ?>/demo-site-footer-condensed" class="wsu-s-nav-vertical__nav-link">Condensed Site Footer</a>
					</li>
					<li class="wsu-s-nav-vertical__nav-item" role="none">
						<a href="<?php echo get_site_url(); ?>/demo-site-footer-none" class="wsu-s-nav-vertical__nav-link">No Site Footer</a>
					</li>
				</ul>
			</li>
			<li class="wsu-s-nav-vertical__nav-item" role="none">
				<a href="#" class="wsu-s-nav-vertical__nav-link" role="menuitem">Link Title that is obviously ridiculously long...</a>
			</li>
			<li class="wsu-s-nav-vertical__nav-item" role="none">
				<a href="#" class="wsu-s-nav-vertical__nav-link" role="menuitem">Another Menu Item</a>
			</li>
			<li class="wsu-s-nav-vertical__nav-item" role="none">
				<a href="#" class="wsu-s-nav-vertical__nav-link" role="menuitem">Another Menu Item</a>
			</li>
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
