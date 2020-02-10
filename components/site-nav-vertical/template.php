<!-- COMPONENT:START -->
<div class="wsu-s-nav-vertical__wrapper wsu-u-no-js <?php echo esc_attr( $wrapper_class ); ?>">
	<nav class="wsu-s-nav-vertical__nav-container" aria-label="Vertical Site Navigation">
		<a href="#" class="wsu-s-nav-vertical__nav-container-close-link">
			<span class="wsu-icon wsu-i-x-close"></span>
			<span class="wsu-s-nav-vertical__nav-container-close-label">Close</span>
		</a>
		<?php
		wp_nav_menu( 
			array( 
				'container' => false,
				'theme_location' => 'site_nav_vertical',
				'menu_class' => 'wsu-s-nav-vertical__nav-list-container',
				'items_wrap'      => '<ul class="test %2$s"  id="wsu-s-nav-vertical" role="menubar" aria-label="Vertical Site Navigation">%3$s</ul>',
			)
		);
		?>
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
