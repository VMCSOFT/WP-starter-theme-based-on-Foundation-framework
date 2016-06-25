<?php
/**
 * Created by PhpStorm.
 * User: jaredchu
 * Date: 6/23/16
 * Time: 12:31 PM
 */

require_once( 'fn/css.php' );
require_once( 'fn/js.php' );
require_once( 'fn/vmc_options.php' );
require_once( 'fn/VMC_Walker_Nav_Menu.php' );

function the_template_directory_uri() {
	echo get_template_directory_uri() . "/";
}

/*Menu*/
register_nav_menus( array(
	'top_nav'    => 'Top navigation menu',
	'main_nav'   => 'Main navigation menu',
	'footer_nav' => 'Footer navigation menu',
) );

/*
 * Helper function to return the theme option value. If no value has been saved, it returns $default.
 * Needed because options are saved as serialized strings.
 *
 * This code allows the theme to work without errors if the Options Framework plugin has been disabled.
 */

if ( ! function_exists( 'of_get_option' ) ) {
	function of_get_option( $name, $default = false ) {

		$optionsframework_settings = get_option( 'optionsframework' );

		// Gets the unique option id
		$option_name = $optionsframework_settings['id'];

		if ( get_option( $option_name ) ) {
			$options = get_option( $option_name );
		}

		if ( isset( $options[ $name ] ) ) {
			return $options[ $name ];
		} else {
			return $default;
		}
	}
}