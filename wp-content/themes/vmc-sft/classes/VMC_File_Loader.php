<?php

/**
 * Created by PhpStorm.
 * User: jaredchu
 * Date: 6/20/16
 * Time: 12:08 PM
 */
class VMC_File_Loader {
	public $dir;
	private $files = array();
	private $acceptedFileTypes = array(
		'css',
		'js',
		'php'
	);

	/**
	 * VMCFileLoader constructor.
	 *
	 * @param $dir
	 */
	public function __construct( $dir, $load = true ) {
		$this->dir = $dir;
		if ( $load ) {
			$this->recursiveLoad( $dir );
		}
	}

	/**
	 * @return array
	 */
	public function getFiles() {
		return $this->files;
	}

	/**
	 * @return array
	 */
	public function getAcceptedFileTypes() {
		return $this->acceptedFileTypes;
	}

	/**
	 * @param array $acceptedFileTypes
	 */
	public function setAcceptedFileTypes( $acceptedFileTypes ) {
		$this->acceptedFileTypes = $acceptedFileTypes;
	}


	/**
	 * @param $dir
	 */
	public function recursiveLoad( $dir ) {

	}
}