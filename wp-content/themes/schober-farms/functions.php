<?php

/*--- THEME SUPPORT ---*/
add_theme_support('post-thumbnails');

// Register style sheet.
add_action( 'wp_enqueue_scripts', 'schober_styles_scripts' );

/**
 * Register style sheet.
 */
function schober_styles_scripts() {

    //MAIN WORDPRESS CSS FILE FOR THEME
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    // SCSS COMIPLED CSS FILE

    wp_register_style( 'bootstrap', get_template_directory_uri() . '/src/libraries/bootstrap-4.0.0/css/bootstrap.min.css', $deps, $ver, $in_footer );
    wp_enqueue_style('bootstrap');

    wp_register_script( 'bootstrap', get_template_directory_uri() . '/src/libraries/bootstrap-4.0.0/js/bootstrap.min.js', $deps, $ver, $in_footer );
    wp_enqueue_script('bootstrap');
}

//REGISTER MENU
register_nav_menus( array(
    'main' => 'Main Menu'
) );







add_shortcode( 'card', 'card' );

//BUTTON SHORT CODES
function button_func($atts,$content){
    extract( shortcode_atts( array(
        'id' => '',
        'class' => '',
        'link' => '',
        'title' => '',
        'target' => '',
        'bg_color' => '',
        'text_color' => '',
        'sub_title' => ''
    ), $atts ) );

    $content = do_shortcode( shortcode_unautop( $content ) );
    if ( '</p>' == substr( $content, 0, 4 )and '<p>' == substr( $content, strlen( $content ) - 3 ) )
        $content = substr( $content, 4, strlen( $content ) - 7 );
    return '<a href="'.$link.'" title="'.$title.'" class="btn '.$class.'" '.(($target != '') ? 'target="'.$target.'" ':'').' '.(($bg_color != '' || $text_color != '') ? 'style="'.(($bg_color != '')?'background-color:'.$bg_color.';border-color:'.$bg_color.';':'').' '.(($text_color != '')?'color:'.$text_color.';':'').' " ':'').'>' . force_balance_tags($content) . ' '.(($sub_title != '')?"<span class='sub_title'>".$sub_title."</span>":"").'</a>';
}

add_shortcode( 'button', 'button_func' );




/// BOOTSTRAP SHORT CODES

function card($atts,$content){
    extract( shortcode_atts( array(
        'id' => '',
        'class' => '',
        'title' => ''
    ), $atts ) );

    $content = do_shortcode( shortcode_unautop( $content ) );
    if ( '</p>' == substr( $content, 0, 4 )and '<p>' == substr( $content, strlen( $content ) - 3 ) )
        $content = substr( $content, 4, strlen( $content ) - 7 );


    return '
        <div class="card">
            '.(($title != '')?'<div class="card-header">'.$title.'</div>':'').'
            <div class="card-block">'.force_balance_tags($content).'</div>
        </div>
    ';
}


function half_and_half($atts, $content = null) {
    extract(shortcode_atts(array(
            'class' => '',
            'id' => '',
            'background_color_1' => '',
            'background_color_2' => '',
    ), $atts));


    $return = '';
    $return .= '<div class="overflow-hidden">';

         $content = do_shortcode( shortcode_unautop( $content ) );
        if ( '</p>' == substr( $content, 0, 4 )and '<p>' == substr( $content, strlen( $content ) - 3 ) )
            $content = substr( $content, 4, strlen( $content ) - 7 );

        $return .= force_balance_tags($content);
    $return .= '</div>';

    return $return;

    //return '<div id="'. $id .'" class="'. $class .'" '.(($openStyle) ? 'style="':'').' '.(($background_image != '') ? 'background-image: url('.$background_image.'); ':'').' '.(($background_color != '') ? 'background-color: '.$background_color.'; ':'').' '.(($openStyle) ? '"':'').'>'.do_shortcode($content).'</div>';
}
add_shortcode ("half_and_half", "half_and_half");

function div($atts, $content = null) {
    extract(shortcode_atts(array(
            'class' => '',
            'id' => '',
            'background_color' => '',
            'background_image' => '',
    ), $atts));

    if($background_color != '' || $background_image != '' ){
        $openStyle = true;
    }else{
        $openStyle = false;
    }

    $content = do_shortcode( shortcode_unautop( $content ) );
        if ( '</p>' == substr( $content, 0, 4 )and '<p>' == substr( $content, strlen( $content ) - 3 ) )
            $content = substr( $content, 4, strlen( $content ) - 7 );
        
    return '<div id="'. $id .'" class="'. $class .'" '.(($openStyle) ? 'style="':'').' '.(($background_image != '') ? 'background-image: url('.$background_image.'); ':'').' '.(($background_color != '') ? 'background-color: '.$background_color.'; ':'').' '.(($openStyle) ? '"':'').'>'.force_balance_tags($content).'</div>';
}
add_shortcode ("div", "div");


function container($atts, $content = null) {
    extract(shortcode_atts(array(
            'class' => '',
            'id' => '',
            'background_color' => '',
            'background_image' => '',
    ), $atts));

    if($background_color != '' || $background_image != '' ){
        $openStyle = true;
    }else{
        $openStyle = false;
    }

    $content = do_shortcode( shortcode_unautop( $content ) );
        if ( '</p>' == substr( $content, 0, 4 )and '<p>' == substr( $content, strlen( $content ) - 3 ) )
            $content = substr( $content, 4, strlen( $content ) - 7 );

    return '<div id="'. $id .'" class="container '. $class .'" '.(($openStyle) ? 'style="':'').' '.(($background_image != '') ? 'background-image: url('.$background_image.'); ':'').' '.(($background_color != '') ? 'background-color: '.$background_color.'; ':'').' '.(($openStyle) ? '"':'').'>'.do_shortcode($content).'</div>';
}
add_shortcode ("container", "container");

function row($atts, $content = null) {
    extract(shortcode_atts(array(
            'class' => '',
            'id' => '',
            'background_color' => '',
            'background_image' => '',
    ), $atts));

    if($background_color != '' || $background_image != '' ){
        $openStyle = true;
    }else{
        $openStyle = false;
    }

    $content = do_shortcode( shortcode_unautop( $content ) );
        if ( '</p>' == substr( $content, 0, 4 )and '<p>' == substr( $content, strlen( $content ) - 3 ) )
            $content = substr( $content, 4, strlen( $content ) - 7 );

    return '<div id="'. $id .'" class="row '. $class .'" '.(($openStyle) ? 'style="':'').' '.(($background_image != '') ? 'background-image: url('.$background_image.'); ':'').' '.(($background_color != '') ? 'background-color: '.$background_color.'; ':'').' '.(($openStyle) ? '"':'').'>'.do_shortcode($content).'</div>';
}
add_shortcode ("row", "row");