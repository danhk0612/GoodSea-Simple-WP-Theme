<?php
// Setup
function goodsea_setup()
{
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
}
add_action('after_setup_theme', 'goodsea_setup');
// Styles & Scripts
function goodsea_scripts()
{
    wp_enqueue_style('goodsea_main_style', get_theme_file_uri('/style.css'));
    wp_enqueue_style('goodsea_sub_style', get_theme_file_uri('/css/sub.css'));
    wp_enqueue_style('materializecss', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css');
    wp_enqueue_script('materializejs', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js', array('jquery'), '0.100.2', 'true');
    wp_register_script('my_amazing_script', plugins_url('amazing_script.js', _FILE_), array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'goodsea_scripts');
// Menu
register_nav_menus(array(
    'main_menu' => 'Main Menu',
    'footer_menu' => 'Footer Menu',
));
// Widgets
function goodsea_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar 1'),
        'before_widget' => '<div class="">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'goodsea_widgets_init');
