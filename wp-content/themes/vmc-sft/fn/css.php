<?php
/**
 * Created by PhpStorm.
 * User: jaredchu
 * Date: 6/6/16
 * Time: 1:03 PM
 */
function reg_styles() {
	//styles
	wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.min.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/custom.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'reg_styles' );