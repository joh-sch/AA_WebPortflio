<!-- Pull images from backend -->
<?php 

$projects = page('aa-projekte')->children()->visible();

?>

<div class="masonry" id="contentHome">

	<?php foreach($projects as $project): ?>

		<?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image ?>
			<div class="masonry--item <?= $project->style() ?> <?= $project->similar() ?>">
						


					<img src="<?= $project->images()->filterBy('filename', '*=', 'cover')->first()->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase-image" />
				</div>
		<?php endif ?>

	<?php endforeach ?>

</div>