<?php

class Database{
	
	private $pdo;
	
	public function __construct(){
		$config = parse_ini_file("config.ini",true);
		$dsn = $config["database"]["dsn"];
		$username = $config["database"]["username"];
		$password = $config["database"]["password"];
		$this->pdo = new PDO($dsn, $username, $password);
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	
	public function query(string $querystring){
		$sql = $this->pdo->prepare($querystring);
		$sql->execute();
		
		return $sql;
	}
}