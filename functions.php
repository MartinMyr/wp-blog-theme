<?php
require 'includes/bootstrap-walker.php';

function johanna_enqueue_scripts() {

	wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/vendors/all.min.css', array(), '5.7.2', 'all');
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/vendors/bootstrap.min.css', array(), '4.3.1', 'all');
	wp_enqueue_style('johanna-style', get_template_directory_uri() . '/assets/css/main.css', array(), '0.0.1', 'all');

	wp_deregister_script('jquery');

	wp_enqueue_script('jQuery', get_template_directory_uri() . '/assets/vendors/jquery.min.js', array(), '3.3.1', true);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/vendors/bootstrap.bundle.js', array(), '4.3.1', true);

}
add_action('wp_enqueue_scripts', 'johanna_enqueue_scripts');

function theme_register_nav_menu() {
	register_nav_menu('primary', 'Navigation Menu');
}
add_action('after_setup_theme', 'theme_register_nav_menu');

add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('image'));