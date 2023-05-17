<div id= <?= $reply["id"] ?> class="replyContainer">
	<div class="replyUser">
		<img src= <?=$ownerPic ?> alt= <?=$reply["user"] ?> width="96" height="96">
		<?=$reply["user"] ?>
	</div>
	<!--<h5 class ="postDate"> <?=$reply["timestamp"] ?> </h5>-->
	<div class="replyText">
		<p> <?= $reply["text"] ?> </p>
	</div>
	<i onclick="rate(this.parentNode.id,'like')" class="fa fa-thumbs-up"> <?= $likes ?> </i>
	<i onclick="rate(this.parentNode.id,'dislike')" class="fa fa-thumbs-down"> <?= $dislikes ?> </i>
</div>