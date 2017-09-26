<h1>The BLOG</h1>
<?php foreach($posts as $post): ?>
	<article>
		<h3>
			<a href="single.php?id=<?=$post['id']?>">
				<?= $post['title']; ?>
			</a>
		</h3>
		<div class="body"><?= $post['body']; ?></div>
	</article>
<?php endforeach; ?>