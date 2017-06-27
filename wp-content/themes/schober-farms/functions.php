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
    wp_register_style('schober_styles', get_template_directory_uri() . '/src/style.css', array(). '1.0');
    wp_enqueue_style('schober_styles');

    wp_register_style( 'bootstrap', get_template_directory_uri() . '/src/libraries/bootstrap-4.0.0/css/bootstrap.min.css', $deps, $ver, $in_footer );
    wp_enqueue_style('bootstrap');

    wp_register_script( 'bootstrap', get_template_directory_uri() . '/src/libraries/bootstrap-4.0.0/js/bootstrap.min.js', $deps, $ver, $in_footer );
    wp_enqueue_script('bootstrap');
}

//REGISTER MENU
register_nav_menus( array(
    'main' => 'Main Menu'
) );







/// BOOTSTRAP COLUMN SHORT CODES
function container($atts, $content = null) {
    extract(shortcode_atts(array(
            'class' => '',
            'id' => '',
    ), $atts));
    return '<div id="'. $id .'" class="container '. $class .'">'.do_shortcode($content).'</div>';
}
add_shortcode ("container", "container");

function row($atts, $content = null) {
    extract(shortcode_atts(array(
            'class' => '',
            'id' => '',
    ), $atts));
    return '<div id="'. $id .'" class="row '. $class .'">'.do_shortcode($content).'</div>';
}
add_shortcode ("row", "row");

function col_1($atts, $content = null) {
    extract(shortcode_atts(array(
            'class' => '',
            'id' => '',
    ), $atts));
    return '<div id="'. $id .'" class="col-1 '. $class .'">'.do_shortcode($content).'</div>';
}
add_shortcode ("col_1", "col_1");

function col_2($atts, $content = null) {
    extract(shortcode_atts(array(
            'class' => '',
            'id' => '',
    ), $atts));
    return '<div id="'. $id .'" class="col-2 '. $class .'">'.do_shortcode($content).'</div>';
}
add_shortcode ("col_2", "col_2");

function col_3($atts, $content = null) {
    extract(shortcode_atts(array(
            'class' => '',
            'id' => '',
    ), $atts));
    return '<div id="'. $id .'" class="col-3 '. $class .'">'.do_shortcode($content).'</div>';
}
add_shortcode ("col_3", "col_3");


function col_4($atts, $content = null) {
    extract(shortcode_atts(array(
            'class' => '',
            'id' => '',
    ), $atts));
    return '<div id="'. $id .'" class="col-4 '. $class .'">'.do_shortcode($content).'</div>';
}
add_shortcode ("col_4", "col_4");


function col_5($atts, $content = null) {
    extract(shortcode_atts(array(
            'class' => '',
            'id' => '',
    ), $atts));
    return '<div id="'. $id .'" class="col-5 '. $class .'">'.do_shortcode($content).'</div>';
}
add_shortcode ("col_5", "col_5");


function col_6($atts, $content = null) {
    extract(shortcode_atts(array(
            'class' => '',
            'id' => '',
    ), $atts));
    return '<div id="'. $id .'" class="col-6 '. $class .'">'.do_shortcode($content).'</div>';
}
add_shortcode ("col_6", "col_6");


function col_7($atts, $content = null) {
    extract(shortcode_atts(array(
            'class' => '',
            'id' => '',
    ), $atts));
    return '<div id="'. $id .'" class="col-7 '. $class .'">'.do_shortcode($content).'</div>';
}
add_shortcode ("col_7", "col_7");


function col_8($atts, $content = null) {
    extract(shortcode_atts(array(
            'class' => '',
            'id' => '',
    ), $atts));
    return '<div id="'. $id .'" class="col-8 '. $class .'">'.do_shortcode($content).'</div>';
}
add_shortcode ("col_8", "col_8");


function col_9($atts, $content = null) {
    extract(shortcode_atts(array(
            'class' => '',
            'id' => '',
    ), $atts));
    return '<div id="'. $id .'" class="col-9 '. $class .'">'.do_shortcode($content).'</div>';
}
add_shortcode ("col_9", "col_9");

function col_10($atts, $content = null) {
    extract(shortcode_atts(array(
            'class' => '',
            'id' => '',
    ), $atts));
    return '<div id="'. $id .'" class="col-10 '. $class .'">'.do_shortcode($content).'</div>';
}
add_shortcode ("col_10", "col_10");

function col_11($atts, $content = null) {
    extract(shortcode_atts(array(
            'class' => '',
            'id' => '',
    ), $atts));
    return '<div id="'. $id .'" class="col-11 '. $class .'">'.do_shortcode($content).'</div>';
}
add_shortcode ("col_11", "col_11");

function col_12($atts, $content = null) {
    extract(shortcode_atts(array(
            'class' => '',
            'id' => '',
    ), $atts));
    return '<div id="'. $id .'" class="col-12 '. $class .'">'.do_shortcode($content).'</div>';
}
add_shortcode ("col_12", "col_12");
