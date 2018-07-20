<!-- 
AA Web Portfolio
––––––––––––––––––––––

Template name: Projekt Page

––––––––––––––––––––––
-->


<!-- –––––– Header –––––– -->
	<?php snippet('/snippets_header/aa-snippet-header') ?>
<!-- –––––––––––––––––––– -->


<!-- ************************************************** -->
<!-- ************************************************** -->



<!-- ************************************************** -->
<!-- ************************************************** -->

	<div class="wrapper--global">

		<div class="main-wrapper" id="main-wrapper"> <!-- THIS IS THE BARBA MAIN WRAPPER! -->
			<div class="main-container" data-namespace="projekt"> <!-- THIS IS THE BARBA MAIN CONTAINER! -->

				<!--–––– NavBar (min) ––––-->
					<?php snippet('/snippets_menus/aa-snippet-navbar-min') ?>
				<!-- –––––––––––––––––––– -->

				<!--–––––– ×-Button ––––––-->
					<div class="menu--close-button z--topmost">
						<a href="/aa-home/" class="z--topmost" style="position: absolute; width: 100%; height: 100%;"></a>
						<img src="/assets/images/close-button.svg" alt="x" id="closingIcon">
					</div>
				<!-- –––––––––––––––––––– -->

				<!--––––––– Content –––––––-->
					<!-- ––––––– Slider ––––––– -->
						<div class="main-carousel">
							<?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>

								<div class="carousel-cell">
									<img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
								</div>

							<?php endforeach ?>
						</div>
					<!-- –––––––––––––––––––––– -->

					<!-- –––– Slide Counter –––– -->
						<div class="slider--counter-container">
							<p class="slider--counter"></p>
						</div>
					<!-- ––––––––––––––––––––––– -->

					<!-- – Project Description – -->
						<div class="slider--projectDescription-container text--project">
							<span><?= $page->title()->kirbytext() ?>, </span>
							<span><?= $page->year()->kirbytext() ?>, </span>
							<span><?= $page->type()->kirbytext() ?>, </span>
							<span><?= $page->client()->kirbytext() ?>, </span>
						</div>
					<!-- ––––––––––––––––––––––– -->

					<!-- – Next Project-Button – -->
						<?php if($page->hasPrev()) { ?>
						<div class="slider--PrevProject-btn-container hidden--dis">
							<a href="<?= $page->prevVisible()->url() ?>" class="slider--PrevProject-btn">
								prev
							</a>
						</div>
						<?php } ?>
					<!-- ––––––––––––––––––––––– -->

					<!-- – Next Project-Button – -->
						<div class="slider--NextProject-btn-container hidden--dis">
							<a href="<?= $page->nextVisible()->url() ?>" class="slider--NextProject-btn">
								next
							</a>
						</div>
					<!-- ––––––––––––––––––––––– -->

				<!-- ––––––––––––––––––––– -->

			</div>
		</div>

	</div>


<!-- ************************************************** -->
<!-- ************************************************** -->


	<!-- –––––– Footer –––––– -->
		<?php snippet('/snippets_menus/aa-snippet-footer') ?>
	<!-- –––––––––––––––––––– -->


<!-- ************************************************** -->
<!-- ************************************************** -->


<!-- init Barba.js -->
	<?= js('assets/js/aa-js-barba-init.js') ?>
<!-- –––––––––––––– -->

</body>
</html>