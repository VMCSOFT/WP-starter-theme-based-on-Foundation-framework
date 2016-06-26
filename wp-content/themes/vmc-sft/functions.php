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