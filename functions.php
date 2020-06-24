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

/* Remove Menu Pages from Dashboard */
add_action('admin_menu', 'imprezachild_remove_menus', 110);
function imprezachild_remove_menus()
{
    remove_submenu_page('themes.php', 'theme-editor.php'); // Theme Editor
}

