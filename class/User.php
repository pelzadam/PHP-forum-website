<?php

class User{
	
	private $db;
	
	public function __construct(){
		$this->db = new Database();
	}
	
	public function register(){
		$sql = "INSERT INTO users(username, password, email, fullname, telnumber, birthdate, birthplace)" .  
		"VALUES(" . validateData($_POST['username']) . "," . validateData($_POST['password']) . "," . validateData($_POST['email']) . 
		"," . validateData($_POST['fullname']) . "," . validateData($_POST['telnum']) . "," . validateData($_POST['birthdate']) . "," . validateData($_POST['birthplace']) . ");";
		copy('view/defaultpfp.jpg', $file->getUserDir() . $_POST['username'] . '.jpg');
		$this->db->query($sql);
	}
	
	public function login(){
		$sql = "SELECT password FROM users where username=\"" . $_POST['username'] . "\";";
		$password = $this->db->query($sql)->fetch();

		if($password[0] == $_POST["password"]){
			return true;
		}else{
			return false;
		}
	}
	
	public function update($data, $column){
		$sql = "UPDATE users SET " . $column . "=" . validateData($data) . " WHERE username=" . validateData($_SESSION['username']) . ";";

		$this->db->query($sql);
	}
	
	public function logout(){
		session_unset();
		session_destroy();
		header('Location: '. $_SERVER["HTTP_REFERER"]);
	}
	
	public function getUsers($name="all"){
		if($name == "all"){
			$sql = "SELECT username,timestamp FROM users";
			$users = $this->db->query($sql)->fetchAll();
		}else{
			$sql ="SELECT username, email, fullname, telnumber, birthdate, birthplace, timestamp, comment FROM users WHERE username = '" . $name . "';";
			$users = $this->db->query($sql)->fetch();
		}

		return $users;
	}
	
	public function search($input){
		$sql = "SELECT username,timestamp FROM users WHERE username LIKE '%" . $input . "%';";
		$users = $this->db->query($sql)->fetchAll();

		return $users;
	}
	
	public function getUserRating($name,$rating){
		$sql = "SELECT count(type) from likes, posts where posts.id = likes.post and posts.user =" . validateData($name) . " and likes.type=" . validateData($rating) . ";";
		$rates = $this->db->query($sql)->fetchAll();
		
		return $rates[0][0];
	}
	
}