<?php if (!defined('FW')) die('Forbidden');

wp_enqueue_script(
    'leven-theme-shortcode-column',
    fw_get_template_customizations_directory_uri(
        '/extensions/shortcodes/shortcodes/column/static/js/scripts.js'
    ),
    false,
	true,
	'in_footer'
);
