<!-- Pull images from backend -->
<?php 

$projects = page('aa-projekte')->children()->visible();

?>

<div class="grid" id="contentHome">

	<?php foreach($projects as $project): ?>

		<?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image ?>

			<div class="grid-item <?= $project->style() ?>">
				<a href="<?= $project->url() ?>">
					<div class="grid-item--overlay">
						<!-- »Show similar« Btn -->
							<div class="grid-item--btn">
								test
							</div>
						<!-- –––––––––––––––––– -->
					</div>
				</a>
				<img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase-image" />
		  </div>

		<?php endif ?>

	<?php endforeach ?>

</div>