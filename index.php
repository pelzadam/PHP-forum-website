<?php

session_start();

require('functions.php');
require('class/Database.php');
require('class/User.php');
require('class/Post.php');
require('class/File.php');

$user = new User();
$post = new Post();
$file = new File();

if(isset($_GET["Logout"])){
	$user->logout();
}

require('view/header.view.php');
require('routing.php');
require('view/footer.view.php');
