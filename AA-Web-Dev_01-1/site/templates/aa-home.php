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


	<!-- –––––– Navbar –––––– -->
		<?php snippet('/snippets_menus/aa-snippet-navbar') ?>
	<!-- –––––––––––––––––––– -->


<!-- ************************************************** -->
<!-- ************************************************** -->


<div class="wrapper--global">

	<div class="main-wrapper" id="main-wrapper"> <!-- THIS IS THE BARBA MAIN WRAPPER! -->
		<div class="main-container" data-namespace="home"> <!-- THIS IS THE BARBA MAIN CONTAINER! -->

			<!--–––– Content Grid ––––-->
				<?php snippet('/snippets_content/aa-snippet-content-grid') ?>
			<!-- –––––––––––––––––––– -->

		</div>
	</div>

</div>


<!-- ************************************************** -->
<!-- ************************************************** -->


	<!-- –––––– Navbar –––––– -->
		<?php snippet('/snippets_menus/aa-snippet-footer') ?>
	<!-- –––––––––––––––––––– -->


<!-- ************************************************** -->
<!-- ************************************************** -->


<!-- init Barba.js -->
	<?= js('assets/js/aa-js-barba-init.js') ?>
<!-- –––––––––––––– -->

</body>
</html>