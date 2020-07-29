<?php

/* Enqueue Child */
add_action('wp_enqueue_scripts', 'imprezachild_enqueue_styles');
function imprezachild_enqueue_styles()
{
    $parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style(
        $parenthandle,
        get_template_directory_uri() . '/style.css',
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        array($parenthandle),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}

/* Remove Menu Pages from Dashboard */
add_action('admin_menu', 'imprezachild_remove_menus', 110);
function imprezachild_remove_menus()
{
    remove_submenu_page('themes.php', 'theme-editor.php'); // Theme Editor
}

