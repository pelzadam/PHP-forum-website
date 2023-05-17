<?php
print_r($_FILES);
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$fields = ["password","fullname","email","comment","telnumber","birthdate","birthplace"];
	foreach($fields as $field){
		if(!empty($_POST[$field])){
			$user->update($_POST[$field],$field);
		}
	}
	
	if($_FILES["profilepic"]["error"]==0){
		move_uploaded_file($_FILES['profilepic']['tmp_name'], "/var/www/html/forum/files/userdir/" . $_SESSION['username'] . ".jpg");
	}
	
	header("Location: /forum/users?user=" . $_SESSION["username"]);
}

if(isset($_GET['user'])){
	$userData = $user->getUsers($_GET['user']);
	if(empty($userData)){
		header('Location: users');
	}
	$profilepic = $file->getUserDir() . $userData["username"] . ".jpg";
	$likes = $user->getUserRating($userData["username"], 'like');
	$dislikes = $user->getUserRating($userData["username"], 'dislike');
	
	echo "<div id='profileContainer'>";
	if($_GET['user'] == $_SESSION['username']){
		require('view/settings.view.php');
	}else{
		require('view/profilesheet.view.php');
	}
	echo "</div>";
}else{
	if (isset($_GET['search'])){
		$usersToView = $user->search($_GET["search"]);
	}else{
		$usersToView = $user->getUsers();
	}

	echo "<div id='toplistContainer'>";
	require('view/users.view.php');

	foreach($usersToView as $u){
		$ownerPic = $file->getUserDir() . $u["username"] . ".jpg";
		$likes = $user->getUserRating($u["username"], 'like');
		$dislikes = $user->getUserRating($u["username"], 'dislike');
		
		require('view/usercard.php');
	}

	echo "</div>";
}