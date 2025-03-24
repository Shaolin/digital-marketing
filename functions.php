

<?php 

function pizza(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}


add_action('after_setup_theme', 'pizza');

// loading css

function my_theme_enqueue_styles() {
    wp_enqueue_style('my-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');


// loading javascript

function my_theme_enqueue_scripts() {
    wp_enqueue_script('main-js', get_template_directory_uri() . '/main.js', null, '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');


// adding menu 


function mytheme_register_menus() {
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'mytheme'),
    ));
}
add_action('after_setup_theme', 'mytheme_register_menus');


// adding logo




function my_theme_setup_logo() {
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'my_theme_setup_logo');

// register






