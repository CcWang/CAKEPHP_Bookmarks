<h1>
	Bookmarks tagged with
	<?= $this->Text->toList($tags) ?>
</h1>
<section>
<?php foreach ($bookmarks as $bookmark):?>
	<article>
		<h4 style="color:Red;"><?= h($bookmark->title) ?></h4>
		<h4><?= $this->Html->link($bookmark->url)?></h4>
		<small><?= h($bookmark->url) ?></small>

		<?= $this->Text->autoParagraph($bookmark->description)?>
	</article>
<?php endforeach;?>
</section>