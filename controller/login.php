<?php

$previous = $_SERVER["HTTP_REFERER"];
$errorMessage = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$isCorrect = $user->login();
	
	if ($isCorrect){
		$_SESSION["username"] = $_POST["username"];
		$_SESSION["profilepic"] = $file->getUserDir() . $_SESSION["username"] . ".jpg"; 
		header('Location: /forum/');
	}else{
		$errorMessage = "Login failed :(";
	}
	
}

require('view/login.view.php');