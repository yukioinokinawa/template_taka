<?php

function custom_theme_support()
{
    add_teme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('title-tag');
    register_nav_menus(array(
        'footer_nav' => esc_html__('footer navigation', 'rtbread'),
        'category_nav' => esc_html__('category navigation', 'rtbread')
    ));
}
add_action('after_setup_theme', 'custom_theme_support');

remove_filter('pre_term_description', 'wp_filter_kses');
remove_filter('term_description', 'wpautop');


function readscript()
{
    wp_enqueue_style('ress', 'https://unpkg.com/ress/dist/ress.min.css', array(), "");
    wp_enqueue_style('mplus', '//fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;700&display=swap', array(), '');
    wp_enqueue_style('mplus', '//fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"', array(), '');
    wp_enqueue_style('rtbread', get_theme_file_uri('style.css'), array(), '');
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.2.1.js', '', '', true);
    wp_enqueue_script('bundle', get_theme_file_uri('/js/menu.js'), 'jquery', '', true);
}
add_action('wp_enqueue_script', 'readscript');
