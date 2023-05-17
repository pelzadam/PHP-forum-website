<?php

if(!isset($_SESSION["username"])){
	header("Location: /forum/login");
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$post -> upload();
	//header("Location: /forum");
	
}

require("view/newpost.view.php");