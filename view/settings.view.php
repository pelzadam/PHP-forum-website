<form method="post" class="profile">
	<div class="profile-header">
		<img src=<?= $profilepic ?> alt="Profile picture">
		<h2 class="profile-username"><?= $userData["fullname"] ?></h2><br>
	</div>
	<h3>@<?= $userData["username"] ?></h3>
  <div class="container">
	<input type="file" name="profilepic"><br>
	Password:<input type="password" name="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" >
	Repeat password :<input type="password" name="password-repeat" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" >
	Full Name:<input type="text" name="fullname" placeholder= <?= $userData["fullname"] ?> >
	Email:<input type="text" name="email" placeholder= <?= $userData["email"] ?> >
	Comment:<input type="text" name="comment" placeholder= <?= $userData["comment"] ?> >
    Telephone Number:<input type="text" name="telnumber" placeholder= <?= $userData["telnumber"] ?> >
    Birthdate:<input type="text" name="birthdate" placeholder= <?= $userData["birthdate"] ?> >
    Birthplace: <input type="text" name="birthplace" placeholder= <?= $userData["birthplace"] ?> >
	<button name="update" type="submit">Update</button>
  </div>
</form>