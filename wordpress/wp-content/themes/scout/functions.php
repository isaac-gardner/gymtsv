<?php
function scout_register_styles(){
    wp_enqueue_style('scout-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), '1.0', 'all');
    wp_enqueue_style('scout-animate', get_template_directory_uri() . "/assets/css/animate.min.css", array(), '1.0', 'all');
    wp_enqueue_style('scout-owl-carousel', get_template_directory_uri() . "/assets/css/owl.carousel.min.css", array(), '1.0', 'all');
    wp_enqueue_style('scout-owl-theme', get_template_directory_uri() . "/assets/css/owl.theme.default.min.css", array(), '1.0', 'all');
    wp_enqueue_style('scout-jquery-fancy-box', get_template_directory_uri() . "/assets/css/jquery.fancybox.min.css", array(), '1.0', 'all');
    wp_enqueue_style('scout-fonts-icomoon', get_template_directory_uri() . "/assets/fonts/icomoon/style.css", array(), '1.0', 'all');
    wp_enqueue_style('scout-fonts-flaticon', get_template_directory_uri() . "/assets/fonts/flaticon/font/flaticon.css", array(), '1.0', 'all');
    wp_enqueue_style('scout-aos', get_template_directory_uri() . "/assets/css/aos.css", array(), '1.0', 'all');
    wp_enqueue_style('scout-style', get_template_directory_uri() . "/assets/style.css", array(), '1.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'scout_register_styles');
?>