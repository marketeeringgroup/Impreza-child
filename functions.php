<?php

/* Enqueue Child */
add_action('wp_enqueue_scripts', 'imprezachild_enqueue_styles');
function imprezachild_enqueue_styles()
{
    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        array('parenthandle'),
        wp_get_theme()->get('Version') // this only works if you have Version in the style header
    );
}