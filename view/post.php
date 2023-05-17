<div id= <?= $p["id"] ?> class="post">
	<div class="titleContainer">
		<div id=<?=$p["user"] ?> class="userContainer" onclick=window.location.replace("users?user="+this.id)>
			<img src= <?=$ownerPic ?> alt= <?=$p["user"] ?> width="96" height="96">
			<?=$p["user"] ?>
		</div>
		<h5 class="postTitle"> <?=$p["title"] ?> </h5>
		<h5 class ="postDate"> <?=$p["timestamp"] ?> </h5>
	</div>
	<div class="fileContainer">
		<?php if($hasFile){
			if($type == "image"){
				echo "<img src=" . $fileSource .">";
			}
		} ?>
		<?= $fileContent ?>
	</div>
	<div class="textContainer">
		<p> <?= $p["text"] ?> </p>
	</div>
	<input id="replyText" type="text" class="reply" placeholder="Reply to this post">
	<button class="reply-btn" onclick="sendReply(this.parentNode.id,this.parentNode.childNodes[7].value)">
	  <i class="fa fa-reply"></i> Reply
	</button>
	<i onclick="rate(this.parentNode.id,'like')" class="fa fa-thumbs-up"> <?= $likes ?> </i>
	<i onclick="rate(this.parentNode.id,'dislike')" class="fa fa-thumbs-down"> <?= $dislikes ?> </i>
</div>