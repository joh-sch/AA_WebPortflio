<!-- Pull images from backend -->
<?php 

$projects = page('aa-projekte')->children()->visible();

?>

<div class="grid" id="contentHome">

	<?php foreach($projects as $project): ?>

		<?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image ?>

			<div class="grid-item <?= $project->style() ?>">
					<div class="grid-item--overlay">

						<!-- –– Project Link –– -->
							<a href="<?= $project->url() ?>"></a>
						<!-- –––––––––––––––––– -->

						<!-- »Show similar« Btn -->
							<div class="grid-item--btn text--project z--high" onClick="alert('test')">
								<span>show similar</span>
							</div>
						<!-- –––––––––––––––––– -->

					</div>
				<img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase-image" />
		  </div>

		<?php endif ?>

	<?php endforeach ?>

</div>