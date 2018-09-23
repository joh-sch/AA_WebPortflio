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
		<?php //snippet('/snippets_overlay/aa-snippet-overlay-fadeCover') ?>
	<!-- ––––––––––––––––––––– -->
	<!-- ––––––––––––––––––––– -->


	<!--–––––– Module X2 –––––– -->
	<!--–––––– Preloader –––––––-->
		<div id="preloader" class="preloader--wrapper bg-color--default z--topmost"> 
			<div id="progress">
				<div id="progressBar"></div>
			</div>
		</div>
	<!-- –––––––––––––––––––––– -->
	<!-- –––––––––––––––––––––– -->


<!-- ************************************************** -->
<!-- ************************************************** -->


	<div class="wrapper--global">

		<div class="main-wrapper" id="main-wrapper"> <!-- THIS IS THE BARBA MAIN WRAPPER! -->
			<div class="main-container" data-namespace="home"> <!-- THIS IS THE BARBA MAIN CONTAINER! -->


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


				<!-- ––––– Module A3 ––––– -->
				<!-- –––– Filter Menu –––– -->
					<?php snippet('/snippets_menus/aa-snippet-menu-filter') ?>
				<!-- ––––––––––––––––––––– -->
				<!-- ––––––––––––––––––––– -->


				<!-- ––––– Module A4 ––––– -->
				<!--–––– Content Grid –––––-->
					<?php snippet('/snippets_content/aa-snippet-content-grid') ?>
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

<!-- –––––– JS ––––––––– -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.2.0/imagesloaded.pkgd.min.js"></script>
<!-- ––––––––––––––––––– -->

</body>
</html>