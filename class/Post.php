<?php

class Post{
	
	private $db;
	
	public function __construct(){
		$this->db = new Database();
	}
	
	public function getPosts(){
		$sql = "SELECT * FROM posts WHERE replyto IS NULL ORDER BY timestamp DESC";
		$posts = $this->db->query($sql)->fetchAll();
		
		return $posts;
	}
	
	public function upload(){
		$sql = "INSERT INTO posts(title, text, file, user)" .
		"VALUES(" . validateData($_POST['title']) . "," . validateData($_POST['text']) . "," . validateData($_FILES['file']['name']) . "," . validateData($_SESSION['username']) . ");";
		if($_FILES["file"]["error"]==0){
			move_uploaded_file($_FILES['file']['tmp_name'], "/var/www/html/forum/files/postdir/" . basename($_FILES['file']['name']));
		}
		$this->db->query($sql);
	}
	
	public function reply(){
		$sql = "INSERT INTO posts(text, user, replyto)" .
		"VALUES(" . validateData($_GET['reply']) . "," . validateData($_SESSION['username']) . "," . validateData($_GET["to"]) . ");";
		$this->db->query($sql);
	}
	
	public function getReply($post){
		$sql = "SELECT * FROM posts WHERE replyto='" . $post . "' ORDER BY timestamp DESC;";
		$replies = $this->db->query($sql)->fetchAll();
		
		return $replies;
	}
	
	public function rate(){
		$sql = "INSERT INTO likes(user, post, type)" . 
		"VALUES(" . validateData($_SESSION['username']) . "," . validateData($_GET['to']) ."," . validateData($_GET['rate']) . ");";
		$this->db->query($sql);
	}
	
	public function getRate($post){
		$likeQuery = "SELECT count(type) FROM likes WHERE post='" . $post . "' AND type='like';";
		$dislikeQuery = "SELECT count(type) FROM likes WHERE post='" . $post . "' AND type='dislike';";
		$likeCount = $this->db->query($likeQuery)->fetchAll();
		$dislikeCount = $this->db->query($dislikeQuery)->fetchAll();
		return [$likeCount[0][0], $dislikeCount[0][0]];
	}
	
}