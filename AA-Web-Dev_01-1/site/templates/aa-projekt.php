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

		<!-- ––––– Module A1 ––––– -->
		<!--––––– Brand Icon ––––––-->
		<?php snippet('/snippets_menus/aa-snippet-navbar-icon') ?>
		<!-- ––––––––––––––––––––– -->
		<!-- ––––––––––––––––––––– -->

		<!-- ––––– Module A2 ––––– -->
		<!-- –––––– Navbar ––––––– -->
			<?php snippet('/snippets_menus/aa-snippet-navbar') ?>
		<!-- ––––––––––––––––––––– -->
		<!-- ––––––––––––––––––––– -->

		<div class="main-wrapper" id="main-wrapper"> <!-- THIS IS THE BARBA MAIN WRAPPER! -->
			<div class="main-container" data-namespace="projekt"> <!-- THIS IS THE BARBA MAIN CONTAINER! -->

				<!-- – Project Descrip. II – -->
				<div class="slider--projectDesc-container z--high text--project2">
					<div class="slider--projectDesc-item-container">

						<div class="description-item text--md">
							<!-- Title -->
							<span><?= $page->title()->kirbytext()?> </span>
							<!-- Client/Free Work -->
							<?php if($page->freeOrClient()->bool()): ?>
								<p>Personal Work</p>
								<?php else: ?>
								<p><?= str::unhtml( $page->client()->kirbytext() ) ?></p>
							<?php endif ?>
						</div>

						<!-- Descripiton -->
						<div class="description-item text--md">
							<span><?= $page->description()->kirbytext() ?></span>				
						</div>

						<div class="description-item text--md">
							<span><?= $page->year()->kirbytext() ?> </span>
							<span><?= str::unhtml( $page->additional()->kirbytext() ) ?></span>

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
							<?php foreach($page->images()->filterBy('filename', '!*=', 'cover') as $image): ?> <!-- excluding cover.jpg via filterBy -->

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
						<?php if($page->hasNext()) { ?>
							<div class="slider--NextProject-btn-container hidden--dis">
								<a href="<?= $page->nextVisible()->url() ?>" class="slider--NextProject-btn">
									next
								</a>
							</div>
						<?php } ?>	
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