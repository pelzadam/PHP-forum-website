<?php

$uri = explode("/",$_SERVER["REQUEST_URI"]);
$uri = explode("?",$uri[2]);

if (isset($uri[0]) && $uri[0] != ""){
	if($uri[0] != "login" && $uri[0] != "register"){
		require('view/navbar.php');
	}
	require("controller/" . $uri[0] . ".php");
} else{
	require('view/navbar.php');
	require("controller/feed.php");
}

