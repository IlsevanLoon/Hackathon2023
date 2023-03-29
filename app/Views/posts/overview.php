<div class="container">
	<?php foreach($posts as $post):?>
		<div class="post_container">
			<h2><?=$post->title?></h2>
			<p><?=$post->content?></p>
		</div>
	<?php endforeach;?>
</div>