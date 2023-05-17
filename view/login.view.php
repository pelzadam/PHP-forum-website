<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="view/style.css">
</head>
<body>

<div id="loginform">
	<h2>Login Form</h2>

	<form method="post" >

	  <div class="container">
		<label for="username">Username</label>
		<input type="text" placeholder="Enter Username" name="username" required>

		<label for="password">Password</label>
		<input type="password" placeholder="Enter Password" name="password" required>
			
		<button type="submit" name="login">Login</button>
		<button type="button" id="signup" onclick=window.location.replace('register')>Sign Up</button>
		<button type="button" id="cancel" class="cancelbtn" onclick=window.location.replace('feed')>Cancel</button>
		<label>
		  <input type="checkbox" checked="checked" name="remember"> Remember me
		</label>
	  </div>
	  
	<div class="error"><?= $errorMessage ?></div>
	
	</form>
</div>

</body>
</html>