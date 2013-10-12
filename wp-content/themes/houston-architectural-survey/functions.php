<?php
define('child_template_directory', get_stylesheet_directory_uri() );

wp_enqueue_script('theme_trust_js', child_template_directory . '/js/theme_trust.js', array('jquery'), '1.0', true);

?>