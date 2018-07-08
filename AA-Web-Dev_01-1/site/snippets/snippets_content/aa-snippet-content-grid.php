<!-- Pull images from backend -->
<?php 

$projects = page('aa-projekte')->children()->visible();

?>

<div class="grid">

	<?php foreach($projects as $project): ?>

		<?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image ?>

			<div class="grid-item">
				<img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase-image" />
		  </div>

		<?php endif ?>

	<?php endforeach ?>

</div>