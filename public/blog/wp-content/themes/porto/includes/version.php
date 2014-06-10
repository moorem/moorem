<?php

/**
 * Theme Meta Info for internal usage
 *
 * Dont Mess with it.
 */
add_action('spyropress_init', 'spyropress_setup_theme');
function spyropress_setup_theme() {
    global $spyropress;

    $spyropress->internal_name = 'porto';
    $spyropress->theme_name = 'Porto';
    $spyropress->theme_version = '1.0.1';

    $spyropress->framework = 'bs';
    $spyropress->row_class = 'row';
    $spyropress->grid_columns = 12;
}
?>