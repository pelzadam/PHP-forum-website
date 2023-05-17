<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	if($_POST["username"] == "" || $_POST["email"] == "" || $_POST["password"] == ""){
		$errorMessage = "Incorrect or missing data :(";
	}else if($_POST["password"] != $_POST["psw-repeat"]){
		$errorMessage = "Passwords do not match :(";
	}else{
		$user->register();
		header('Location: /forum/');
	}
}

require("view/register.view.php");