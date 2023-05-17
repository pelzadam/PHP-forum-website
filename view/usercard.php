<div id=<?= $u["username"] ?> class="usercard" onclick=window.location.replace("users?user="+this.id)>
	<img src= <?= $ownerPic ?>  alt= <?=$u["username"] ?> >
	<h5> <?= $u["username"] ?> </h5>
	<h5> <?= $u["timestamp"] ?> </h5>
	<h5> <?= $likes ?> </h5>
	<h5> <?= $dislikes ?> </h5>
</div>