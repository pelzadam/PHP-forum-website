<div class="topnav">
	<a href="/forum" <?php echo isUri("/forum/")? 'class="active"' : ''; ?> >Feed</a>
	<a href="newpost" <?php echo isUri("/forum/newpost")? 'class="active"' : ''; ?> >New post</a>
	<a href="users" <?php echo isUri("/forum/users")? 'class="active"' : ''; ?> >Users</a>
	<div class="dropdown" id="user">
		<a href=<?php echo isset($_SESSION['username'])? 'users?user=' . $_SESSION["username"] : 'login' ; ?>><img src=<?php echo isset($_SESSION['username'])? $_SESSION['profilepic'] : 'view/defaultpfp.jpg' ; ?> > <?php echo isset($_SESSION['username'])? $_SESSION['username'] : "Login"; ?></a>
		<?php 
		echo isset($_SESSION['username'])?
			'<div class="dropdown-content">
				<a href="myposts">My posts</a>
				<a href="settings">Settings</a>
				<a href='. $_SERVER['PHP_SELF'] . '?Logout' . '>Logout</a>
			</div>' :
			''; 
		?>
	</div>
</div>
