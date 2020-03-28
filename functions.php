<?php

add_action( 'after_setup_theme', 'openvld2020_setup' );

function openvld2020_setup() {

    load_theme_textdomain( 'openvld2020', get_template_directory() . '/languages' );
    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size(500);

    add_image_size( 'my-size-1', 1920 );
    add_image_size( 'my-size-2', 1650 );
    add_image_size( 'my-size-3', 1280 );
    add_image_size( 'my-size-4', 1024 );
    add_image_size( 'my-size-5', 768 );

    // Remove max width filter
    function remove_max_srcset_image_width( $max_width ) {
        return false;
    }
    add_filter( 'max_srcset_image_width', 'remove_max_srcset_image_width' );

    global $content_width;
    if ( ! isset( $content_width ) ) $content_width = 840;

    register_nav_menus(
        array( 'main-menu' => __( 'Main Menu', 'cleysen' ) )
    );

    function my_deregister_scripts(){
        wp_deregister_script( 'wp-embed' );
    }

    add_action( 'wp_footer', 'my_deregister_scripts' );
}

/**
 * Remove Emoji Cruft
 */

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'wp_generator');

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}


add_filter( 'ninja_forms_i18n_front_end', 'my_custom_ninja_forms_i18n_front_end' );

function my_custom_ninja_forms_i18n_front_end( $strings ) {
    $strings['fieldsMarkedRequired'] = 'Velden gemarkeerd met een * zijn verplicht.';
    $strings['changeEmailErrorMsg'] = 'Vul a.u.b. een geldig e-mail adres in.';
    $strings['formErrorsCorrectErrors'] = 'Corrigeer a.u.b. de fouten voor u dit formulier indient.';
    $strings['validateRequiredField'] = 'Dit is een verplicht veld.';

    return $strings;
}