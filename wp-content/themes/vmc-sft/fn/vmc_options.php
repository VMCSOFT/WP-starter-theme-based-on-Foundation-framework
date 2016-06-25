<?php
/**
 * Created by PhpStorm.
 * User: jaredchu
 * Date: 6/24/16
 * Time: 3:41 PM
 */

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