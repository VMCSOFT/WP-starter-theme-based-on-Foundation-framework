<?php
/**
 * Created by PhpStorm.
 * User: jaredchu
 * Date: 6/24/16
 * Time: 3:41 PM
 */

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

$option_type = array(
	'text',
	'textarea',
	'checkbox',
	'select',
	'radio',
	'upload',// (an image uploader)
	'images',// (use images instead of radio buttons)
	'background',// (a set of options to define a background)
	'multicheck',
	'color',// (a jquery color picker)
	'typography',// (a set of options to define typography)
	'editor'
);

function get_theme_name() {
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace( "/\W/", "_", strtolower( $themename ) );

	return $themename;
}

function get_suffix() {
	$suffix = 'vmc';
	return $suffix;
}

function mix_id( $id ) {
	return get_suffix() . '_' . $id;
}

function mix_text_trans( $text ) {
	return __( $text, get_theme_name() );
}