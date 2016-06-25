<?php

/**
 * Created by PhpStorm.
 * User: jaredchu
 * Date: 6/24/16
 * Time: 4:17 PM
 */
class VMC_Walker_Nav_Menu extends Walker_Nav_Menu {
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul class=\"menu\">\n";
	}
}