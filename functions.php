<?php

// Maybe overkill, but cut's down on the clutter.
require_once __DIR__ . '/classes/class-autoloader.php';

// We should probably create an instance of this theme.
$wsuwp_theme_binder = new WSUWP\Theme\Binder\Binder_Theme();

// Let's get this party started.
$wsuwp_theme_binder->setup_theme();
