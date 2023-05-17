<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div id="loginform">
	<form method="post">
	  <div class="container">
		<h1>Register</h1>
		<p>Please fill in this form to create an account.</p>
		<hr>
		
		<label for="username"><b>Username</b></label>
		<input type="text" placeholder="Enter Username" name="username" id="username" required>
		
		<label for="email"><b>Email</b></label>
		<input type="text" placeholder="Enter Email" name="email" id="email" required>

		<label for="password"><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="password" id="password" required>

		<label for="psw-repeat"><b>Repeat Password</b></label>
		<input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
		<hr>
		
		<label for="fullname"><b>Full name</b></label>
		<input type="text" placeholder="Enter Email" name="fullname" id="fullname">
		
		<label for="telnum"><b>Telephone number</b></label>
		<input type="text" placeholder="Enter Email" name="telnum" id="telnum">

		<label for="birthdate">Birthdate</label><br/>
		<input type="date" name="birthdate" id="birthdate"><br/>
		
		<label for="birthplace"><b>Birthplace</b></label>
		<input type="text" placeholder="Enter Email" name="birthplace" id="birthplace">

		<button type="submit" class="registerbtn">Register</button>
	  </div>
	  
	  <div class="container signin">
		<p>Already have an account? <a href="/forum/login">Sign in</a>.</p>
	  </div>
	</form>
</div>

</body>
</html>