<div class="profile">
	<div class="profile-header">
		<img src=<?= $profilepic ?> alt="Profile picture">
		<h2 class="profile-username"><?= $userData["fullname"] ?></h2><br>
	</div>
	<h3>@<?= $userData["username"] ?></h3>
	<h3><?= $userData["email"] ?></h3>
	<p><?= $userData["comment"] ?></p>
  <div class="profile-info">
    <p class="info-item">Likes: <span class="info-value"> <?= $likes ?> </span></p>
    <p class="info-item">Dislikes: <span class="info-value"> <?= $dislikes ?> </span></p>
    <p class="info-item">Login Date: <span class="info-value"><?= $userData["timestamp"] ?></span></p>
    <p class="info-item">Telephone Number: <span class="info-value"><?= $userData["telnumber"] ?></span></p>
    <p class="info-item">Birthdate: <span class="info-value"><?= $userData["birthdate"] ?></span></p>
    <p class="info-item">Birthplace: <span class="info-value"><?= $userData["birthplace"] ?></span></p>
  </div>
</div>