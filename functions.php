<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {
    wp_enqueue_style('portfoliotheme-style', get_stylesheet_directory_uri() . '/dist/css/style.css', array(), filemtime(get_stylesheet_directory() . '/dist/css/style.css'));    
    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/parts/main.js', array(), filemtime(get_stylesheet_directory() . '/parts/main.js'), true);    
    // Script fontawesome
    wp_enqueue_script('font-awesome-kit', 'https://kit.fontawesome.com/2141edcbd6.js', array(), null);   
    
}


function portfoliotheme_supports() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
    register_nav_menu('toggle', 'Menu burger');
    add_theme_support('custom-logo');
}

function portfoliotheme_menu_class ($classes) {
    $classes[] = 'nav-item';
    return $classes;
}

function portfoliotheme_menu__link_class ($attrs) {
    $attrs['class'] = 'nav-link';
    return $attrs;
}

add_action('after_setup_theme', 'portfoliotheme_supports');
add_filter('nav_menu_css_class', 'portfoliotheme_menu_class');
add_filter('nav_menu_link_attributes', 'portfoliotheme_menu__link_class');