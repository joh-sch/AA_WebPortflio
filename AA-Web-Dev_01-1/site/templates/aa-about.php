<!-- 
AA Web Portfolio
––––––––––––––––––––––

Template name: Home

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
			<div class="main-container" data-namespace="about"> <!-- THIS IS THE BARBA MAIN CONTAINER! -->

				<!-- ––––– Module A6 ––––– -->
				<!--–––– About Slider –––––-->
          <?php snippet('/snippets_content/aa-snippet-about-slider') ?>

          <div class="about-slider">
            <!-- Slides -->
            <?php foreach($page->images() as $image): ?> 
              <div class="about-slide">
                <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
              </div>
            <?php endforeach ?>
          </div>
				<!-- ––––––––––––––––––––– -->
				<!-- ––––––––––––––––––––– -->

			</div>
		</div>

	</div>


<!-- ************************************************** -->
<!-- ************************************************** -->


	<!-- ––––– Module A5 ––––– -->
	<!-- –––––– Footer ––––––– -->
		<?php snippet('/snippets_menus/aa-snippet-footer') ?>
	<!-- ––––––––––––––––––––– -->
	<!-- ––––––––––––––––––––– -->


<!-- ************************************************** -->
<!-- ************************************************** -->


<!-- init Barba.js -->
	<?= js('assets/js/aa-js-barba-init.js') ?>
<!-- –––––––––––––– -->

</body>
</html>