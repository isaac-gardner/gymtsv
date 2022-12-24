<?php

function scout_theme_support() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'scout_theme_support');

function scout_menus() {
    $locations = array(
        'primary' => "Head Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'scout_menus');


function scout_register_styles(){
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('scout-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), '1.0', 'all');
    wp_enqueue_style('scout-animate', get_template_directory_uri() . "/assets/css/animate.min.css", array(), '1.0', 'all');
    wp_enqueue_style('scout-owl-carousel', get_template_directory_uri() . "/assets/css/owl.carousel.min.css", array(), '1.0', 'all');
    wp_enqueue_style('scout-owl-theme', get_template_directory_uri() . "/assets/css/owl.theme.default.min.css", array(), '1.0', 'all');
    wp_enqueue_style('scout-jquery-fancy-box', get_template_directory_uri() . "/assets/css/jquery.fancybox.min.css", array(), '1.0', 'all');
    wp_enqueue_style('scout-fonts-icomoon', get_template_directory_uri() . "/assets/fonts/icomoon/style.css", array(), '1.0', 'all');
    wp_enqueue_style('scout-fonts-flaticon', get_template_directory_uri() . "/assets/fonts/flaticon/font/flaticon.css", array(), '1.0', 'all');
    wp_enqueue_style('scout-aos', get_template_directory_uri() . "/assets/css/aos.css", array(), '1.0', 'all');
    wp_enqueue_style('scout-style', get_template_directory_uri() . "/assets/css/style.css", array('scout-aos', 'scout-fonts-flaticon', 'scout-fonts-icomoon', 'scout-jquery-fancy-box', 'scout-owl-theme', 'scout-owl-carousel', 'scout-animate', 'scout-bootstrap' ), $version , 'all');
}

add_action( 'wp_enqueue_scripts', 'scout_register_styles');

function scout_register_scripts(){
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_script('scout-bootstrap-jquery', get_template_directory_uri() . "/assets/js/jquery-3.4.1.min.js", array(), '3.4.1', true);
    wp_enqueue_script('scout-bootstrap-popper', get_template_directory_uri() . "/assets/js/popper.min.js", array(), '3.4.1', true);
    wp_enqueue_script('scout-bootstrap-js', get_template_directory_uri() . "/assets/js/bootstrap.min.js", array(), '3.4.1', true);
    wp_enqueue_script('scout-owl-carousel', get_template_directory_uri() . "/assets/js/owl.carousel.min.js", array(), '3.4.1', true);
    wp_enqueue_script('scout-animatenumber', get_template_directory_uri() . "/assets/js/jquery.animateNumber.min.js", array(), '3.4.1', true);
    wp_enqueue_script('scout-jquery-waypoint', get_template_directory_uri() . "/assets/js/jquery.waypoints.min.js", array(), '3.4.1', true);
    wp_enqueue_script('scout-fancybox', get_template_directory_uri() . "/assets/js/jquery.fancybox.min.js", array(), $version, true);
    wp_enqueue_script('scout-jquery-stick', get_template_directory_uri() . "/assets/js/jquery.sticky.js", array(), $version, true);
    wp_enqueue_script('scout-aos', get_template_directory_uri() . "/assets/js/aos.js", array(), $version, true);
    wp_enqueue_script('scout-js', get_template_directory_uri() . "/assets/js/custom.js", array(), $version, true);
}

add_action( 'wp_enqueue_scripts', 'scout_register_scripts');
?>

