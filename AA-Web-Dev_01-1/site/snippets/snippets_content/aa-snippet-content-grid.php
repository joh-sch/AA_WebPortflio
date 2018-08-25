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

						<!-- – Project Info –– -->
						<div class="grid-item--overlay--text-container">

							<div class="grid-item--overlay--text text--project">
								<span><?= $project->title()->kirbytext() ?></span>
								<span><?= $project->year()->kirbytext() ?></span>
							</div>

							<div class="grid-item--overlay--text text--project text--italic ">
								<span><?= $project->client()->kirbytext() ?></span>
							</div>
							<div class="grid-item--overlay--text text--description">
								<span><?= $project->description()->kirbytext() ?></span>
							</div>

						</div>
						<!-- –––––––––––––––––– -->

						<!-- »Show similar« Btn -->
							<div class="grid-item--overlay--btn text--project z--high" onClick="alert('test')">
								<span>show similar</span>
							</div>
						<!-- –––––––––––––––––– -->

					</div>
				<img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase-image" />
		  </div>

		<?php endif ?>

	<?php endforeach ?>

</div>