<?php

function custom_theme_support()
{
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    register_nav_menus(array(
        'footer_nav' => esc_html__('footer navigation', 'template_taka'),
        'category_nav' => esc_html__('category navigation', 'template_taka')
    ));
}
add_action('after_setup_theme', 'custom_theme_support');

remove_filter('pre_term_description', 'wp_filter_kses');
remove_filter('term_description', 'wpautop');


function theme_script()
{
    wp_enqueue_style('ress', 'https://unpkg.com/ress/dist/ress.min.css', array(), "");
    wp_enqueue_style('mplus', '//fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;700&display=swap', array(), '');
    wp_enqueue_style('roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"', array(), '');
    wp_enqueue_style('template_taka', get_template_directory_uri() . '/SASS/style.css', array(), '1.0.0');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bundle', get_theme_file_uri('/js/menu.js'), 'jquery', '', true);
}
add_action('wp_enqueue_scripts', 'theme_script');

function template_taka_theme_add_editor_styles()
{
    add_editor_style(get_template_directory_uri() . "/editor-style.css");
}
add_action('admin_init', 'template_taka_theme_add_editor_styles');
