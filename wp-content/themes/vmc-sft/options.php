<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace( "/\W/", "_", strtolower( $themename ) );

	$optionsframework_settings       = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {
	$options = array();

	$options[] = array(
		'name' => mix_text_trans( 'Basic Settings' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => mix_text_trans( 'Logo image' ),
		'desc' => mix_text_trans( 'Website main logo' ),
		'id'   => mix_id( 'logo_image' ),
		'std'  => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => mix_text_trans( 'Logo width' ),
		'desc' => mix_text_trans( 'Logo width in px ext: 100px or auto' ),
		'id'   => mix_id( 'logo_width' ),
		'std'  => 'auto',
		'type' => 'text'
	);

	$options[] = array(
		'name' => mix_text_trans( 'Logo height' ),
		'desc' => mix_text_trans( 'Logo height in px ext: 100px or auto' ),
		'id'   => mix_id( 'logo_height' ),
		'std'  => 'auto',
		'type' => 'text'
	);

	$options[] = array(
		'name' => mix_text_trans( 'Main color' ),
		'desc' => mix_text_trans( 'Website main color' ),
		'id'   => mix_id( 'main_color' ),
		'std'  => '',
		'type' => 'color'
	);

	$options[] = array(
		'name' => mix_text_trans( 'Secondary color' ),
		'desc' => mix_text_trans( 'Website secondary color' ),
		'id'   => mix_id( 'secondary_color' ),
		'std'  => '',
		'type' => 'color'
	);

	$options[] = array(
		'name' => mix_text_trans( 'Home page' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => mix_text_trans( 'Slider section' ),
		'desc' => mix_text_trans( 'Slider shortcode' ),
		'id'   => mix_id( 'slider_section' ),
		'std'  => '',
		'type' => 'text'
	);

	$options[] = array(
		'name' => mix_text_trans( 'H1 tag' ),
		'desc' => mix_text_trans( 'Heading text in homepage' ),
		'id'   => mix_id( 'h1_tag' ),
		'std'  => '',
		'type' => 'text'
	);

	$options[] = array(
		'name' => mix_text_trans( 'Home page description' ),
		'desc' => mix_text_trans( 'Description under H1 tag' ),
		'id'   => mix_id( 'hompage_description' ),
		'std'  => '',
		'type' => 'editor'
	);

	return $options;
}