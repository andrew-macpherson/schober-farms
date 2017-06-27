<?php

// Register style sheet.
add_action( 'wp_enqueue_scripts', 'schober_styles_scripts' );

/**
 * Register style sheet.
 */
function schober_styles_scripts() {

    //MAIN WORDPRESS CSS FILE FOR THEME
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    // SCSS COMIPLED CSS FILE
    wp_register_style('schober_styles', wp_enqueue_style( 'slider', get_template_directory_uri() . '/src/style.css',false,'1.1','all'));
    wp_enqueue_style('schober_styles');
}

//REGISTER MENU
register_nav_menus( array(
    'main' => 'Main Menu'
) );
