<?php

//include NavWlaker 
require_once("bootstrap_5_wp_nav_menu_walker.php");

// To Can Add Image 
add_theme_support( 'post-thumbnails' ); 


function gabor_add_styles()
{
    wp_enqueue_style('all-css', get_template_directory_uri() . '/css/all.min.css');
    wp_enqueue_style('boot-css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
}

function gabor_add_scripts()
{
    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/js/jquery-2.2.4.js', array() ,false, true);
    wp_enqueue_script('jquery-min-js', get_template_directory_uri() . '/js/jquery-2.2.4.min.js', array() ,false, true);
    wp_enqueue_script('popper-js', get_template_directory_uri() . '/js/popper.min.js', array() ,false, true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array() ,false, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array() ,false, true);
    wp_enqueue_script('dropdown-js', get_template_directory_uri() . '/js/bootstrap-dropdown.js', array() ,false, true);
    wp_enqueue_script('html5shiv-js', get_template_directory_uri() . '/js/html5shive.js');
    wp_enqueue_script('min-js', get_template_directory_uri() . '/js/all.min.js');
    wp_script_add_data("html5shiv-js",'conditional','ls IE 9');
    wp_script_add_data("respond-js",'conditional','ls IE 9');
}

add_action('wp_enqueue_scripts','gabor_add_styles');
add_action('wp_enqueue_scripts','gabor_add_scripts');


// for bootstrap menu 

function gabor_register_menu()
{
    register_nav_menus( array(
        'gabor_menu' => "Naviagation Bar",
        'footer_menu' => "Footer Bar",
    ));
}

function gtg_bootstrap_menu()
{
    wp_nav_menu(array
    (
        'theme_location' => 'gabor_menu',
        "menu_class" =>"nav navbar-nav",
        'container' => false,
        "depth" => 2,
        'walker' => new bootstrap_5_wp_nav_menu_walker()
        
    ));

}

add_action('init','gabor_register_menu');


?>