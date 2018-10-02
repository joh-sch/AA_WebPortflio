<!-- Pull images from backend -->
<?php 

$projects = page('aa-projekte')->children()->visible();

?>

<div class="masonry" id="contentHome">

	<?php foreach($projects as $project): ?>

		<?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image ?>
			<div class="masonry--item <?= $project->style() ?> <?= $project->similar() ?>">
				<!-- Slide Counter -->
				<div class="grid-item--counter-container">
					<!-- Count images -->
					<?php
					$slideCount = $project->images()->count();
					?>
					<!-- Place counter if more than cover -->
					<?php if($slideCount > 2) { ?>
						<div class="text--headline">
							<span>
								<?php
								echo $project->images()->count();
								?>
							</span>
						</div>
					<?php } ?>	
				</div>

				<!-- Overlay -->
				<div class="grid-item--overlay">
					<!-- –– Project Link –– -->
						<a href="<?= $project->url() ?>"></a>
					<!-- –––––––––––––––––– -->

					<!-- – Project Info –– -->
					<div class="grid-item--overlay--text-container">

						<div class="grid-item--overlay--text text--headline">
							<span><?= $project->title()->kirbytext() ?></span>
							<span><?= $project->year()->kirbytext() ?></span>
						</div>

						<div class="grid-item--overlay--text text--project text--italic ">

							<?php if($project->freeOrClient()->bool()): ?>
								<span>Free Work</span>
								<?php else: ?>
								<span>Client: <?= str::unhtml( $project->client()->kirbytext() ) ?></span>
							<?php endif ?>

						</div>
						<div class="grid-item--overlay--text text--project">
							<span><?= $project->description()->kirbytext() ?></span>
						</div>

					</div>
					<!-- –––––––––––––––––– -->

					<!-- »Show similar« Btn -->
						<div class="grid-item--overlay--btn text--headline z--high filters--tag" onClick="">
							<button data-filter=".<?= $project->similar() ?>">
								<span>show similar</span>
							</button>
						</div>
					<!-- –––––––––––––––––– -->
				</div>
				<img src="<?= $project->images()->filterBy('filename', '*=', 'cover')->first()->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase-image" />
			</div>
		<?php endif ?>

	<?php endforeach ?>

</div>