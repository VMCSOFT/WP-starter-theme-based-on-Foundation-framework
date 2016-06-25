<?php

/**
 * Created by PhpStorm.
 * User: jaredchu
 * Date: 6/20/16
 * Time: 12:04 PM
 */
class VMC_Script_Loader {
	public $cssArray = array();
	public $jsArray = array();

	/**
	 * VMCScriptLoader constructor.
	 *
	 * @param $cssArray
	 * @param $jsArray
	 */
	public function __construct( $cssArray, $jsArray, $regis = true ) {
		$this->cssArray = $cssArray;
		$this->jsArray  = $jsArray;

		if ( $regis ) {
			$this->registerCss();
			$this->registerJs();
		}
	}


	function registerCss() {

	}

	function registerJs() {

	}
}