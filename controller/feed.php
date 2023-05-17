<?php

$posts = $post->getPosts();

if(isset($_GET["reply"]) && isset($_GET["to"])){
	if(!isset($_SESSION['username'])){
		header("Location: login");
	}else{
		$post->reply();
	}
}	

if(isset($_GET["rate"]) && isset($_GET["to"])){
	$post->rate();
}	

if(isset($_GET["getRates"]) && isset($_GET["of"])){
	$post->getRate($_GET["of"]);
}

echo "<div class = 'postContainer'>";

foreach($posts as $p){ 
	$ownerPic = $file->getUserDir() . $p["user"] . ".jpg";
	$ratings = $post->getRate($p["id"]);
	$likes = $ratings[0];
	$dislikes = $ratings[1];
	if(!is_null($p["file"])){
		$hasFile = true;
		$fileContent = "<img height='300px' width='auto' src='" . $file->getPostDir() . $p["file"] . "'>";
	}else{
		$fileContent = "";
	}
	
	require('view/post.php');
	
	$replies = $post -> getReply($p["id"]);
	
	foreach($replies as $reply){
		$ratings = $post->getRate($peply["id"]);
		$likes = $ratings[0];
		$dislikes = $ratings[1];
		require("view/reply.view.php");
	}
}

echo "</div>";