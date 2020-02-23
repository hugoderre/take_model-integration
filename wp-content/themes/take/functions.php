<?php 

function load_stylesheets() {

    wp_register_style('slick', get_template_directory_uri() . '/plugins/slick-carousel/slick/slick.css');
    wp_enqueue_style('slick');

    wp_register_style('aos', '/node_modules/aos/dist/aos.css');
    wp_enqueue_style('aos');

    wp_register_style('slick-theme', get_template_directory_uri() . '/plugins/slick-carousel/slick/slick-theme.css');
    wp_enqueue_style('slick-theme');

    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('stylesheet');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');



function loadjs() {

    wp_register_script('jquery', get_template_directory_uri() . '/plugins/js/jquery-3.4.1.min.js', '', 1, true);
    wp_enqueue_script('jquery');

    wp_register_script('popper',  get_template_directory_uri() . '/plugins/js/popper.js', '', 1, true);
    wp_enqueue_script('popper');

    wp_register_script('bootstrap', get_template_directory_uri() .  '/plugins/js/bootstrap.min.js', '', 1, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('slick', get_template_directory_uri() .   '/plugins/slick-carousel/slick/slick.min.js', '', 1, true);
    wp_enqueue_script('slick');

    wp_register_script('aos', '/node_modules/aos/dist/aos.js', '', 1, true);
    wp_enqueue_script('aos');

    wp_register_script('customjs', get_template_directory_uri() . '/plugins/custom.js', '', 1, true);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'loadjs');

add_theme_support('menus');

add_theme_support('post-thumbnails');

register_nav_menus(
    [
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme')
    ]
);

add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);

