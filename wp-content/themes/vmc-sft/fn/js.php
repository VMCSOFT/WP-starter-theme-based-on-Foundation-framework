<?php
/**
 * Created by PhpStorm.
 * User: jaredchu
 * Date: 6/6/16
 * Time: 12:56 PM
 */

function reg_scripts() {
	//jquery
	wp_deregister_script( 'jquery' ); // deregisters the default WordPress jQuery
	wp_register_script( 'jquery', ( get_template_directory_uri() . '/js/vendor/jquery.js' ), false );
	wp_enqueue_script( 'jquery' );

	//javascript
	wp_enqueue_script( 'what-input', get_template_directory_uri() . '/js/vendor/what-input.js' );
	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/js/vendor/foundation.min.js' );
	wp_enqueue_script( 'app', get_template_directory_uri() . '/js/custom.js' );
}

add_action( 'wp_enqueue_scripts', 'reg_scripts' );