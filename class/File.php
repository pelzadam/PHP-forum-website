<?php

class File{

	private $userdir;
	private $filedir;

	public function __construct(){
		$config = parse_ini_file("config.ini",true);
		$this->userdir = $config["paths"]["base"] . $config["paths"]["users"] . "/";
		$this->filedir = $config["paths"]["base"] . $config["paths"]["posts"] . "/";
	}
	
	public function getUserDir(){
		return $this->userdir;
	}
	
	public function getPostDir(){
		return $this->filedir;
	}
	
}