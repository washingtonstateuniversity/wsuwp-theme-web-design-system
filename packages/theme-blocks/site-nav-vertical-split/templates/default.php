<?php namespace WSUWP\Theme\WDS; ?>

<!-- COMPONENT:START -->
<div class="wsu-s-nav-vertical-split__wrapper">
	<div class="wsu-s-nav-vertical-split__overlay  wsu-s-nav-vertical--close"></div>
	<div class="wsu-s-nav-vertical-split__menu-bar-wrapper">
		<button
			class="wsu-s-nav-vertical-split__menu-bar wsu-s-nav-vertical--open"
			aria-label="Open Menu"
		>
			<span class="wsu-s-nav-vertical-split__menu-bar-icon-container">
				<span class="wsu-s-nav-vertical-split__menu-icon-bar"></span>
				<span class="wsu-s-nav-vertical-split__menu-icon-bar"></span>
				<span class="wsu-s-nav-vertical-split__menu-icon-bar"></span>
			</span>
			<span class="wsu-s-nav-vertical-split__menu-bar-label"></span>
		</button>
	</div>
	<nav class="wsu-s-nav-vertical-split">
		<div class="wsu-s-nav-vertical-split__close-wrapper">
			<button
				class="wsu-s-nav-vertical-split__close-button wsu-s-nav-vertical--close"
			>
				Close
			</button>
		</div>
		<?php wp_nav_menu(
			array(
				'theme_location' => 'site_nav_vertical',
				'menu_class'     => 'wsu-s-nav-vertical-split__menu',
				'container'      => '',
				'walker'         => new Menu_Walker(),
			)
		); ?>
		<div class="wsu-s-nav-vertical-split__close-footer-wrapper">
			<button
				class="wsu-s-nav-vertical-split__close-button wsu-s-nav-vertical--close"
			>
				Close
			</button>
		</div>
	</nav>
</div>
<!-- COMPONENT:END -->
