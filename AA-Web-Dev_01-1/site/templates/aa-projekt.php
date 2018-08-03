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


	<!-- ––––– Module X1 ––––– -->
	<!--–––– FadeIn-Cover –––––-->
		<?php snippet('/snippets_overlay/aa-snippet-overlay-fadeCover') ?>
	<!-- ––––––––––––––––––––– -->
	<!-- ––––––––––––––––––––– -->


<!-- ************************************************** -->
<!-- ************************************************** -->


	<div class="wrapper--global">

		<div class="main-wrapper" id="main-wrapper"> <!-- THIS IS THE BARBA MAIN WRAPPER! -->
			<div class="main-container" data-namespace="projekt"> <!-- THIS IS THE BARBA MAIN CONTAINER! -->


				<!--––––– Brand Icon –––––-->
					<?php snippet('/snippets_menus/aa-snippet-navbar-icon') ?>
				<!-- –––––––––––––––––––– -->


				<!-- ––––– Module A2 ––––– -->
				<!-- –––––– Navbar ––––––– -->
					<?php snippet('/snippets_menus/aa-snippet-navbar') ?>
				<!-- ––––––––––––––––––––– -->
				<!-- ––––––––––––––––––––– -->

				<!-- – Project Descrip. II – -->
				<div class="slider--projectDesc-container z--high text--project2">

					<div class="slider--projectDesc-section" id="descSection2">
						<div class="slider--projectDesc-item-container">
							<div>
								<span><?= $page->title()->kirbytext()?> </span>
								<span>(<?= str::unhtml( $page->context()->kirbytext() ) ?>) </span>
							</div>

							<div>
								<span><?= $page->description()->kirbytext() ?> </span>
							</div>

							<div>
								<span><?= $page->year()->kirbytext() ?> </span>
								<span>(<?= str::unhtml( $page->additional()->kirbytext() ) ?>) </span>
							</div>

							<!-- –––– Slide Counter –––– -->
								<div class="slider--counter-container">
									<p class="slider--counter"></p>
								</div>
							<!-- ––––––––––––––––––––––– -->
						</div>
					</div>
				</div>
				<!-- ––––––––––––––––––––––– -->

				<!--–––––– ×-Button ––––––-->
					<div class="menu--close-button z--top">
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