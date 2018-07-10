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


	<div class="wrapper--global">

		<div class="main-wrapper" id="main-wrapper"> <!-- THIS IS THE BARBA MAIN WRAPPER! -->
			<div class="main-container" data-namespace="projekt"> <!-- THIS IS THE BARBA MAIN CONTAINER! -->

				<!--–––––– ×-Button ––––––-->
					<?php snippet('/snippets_menus/aa-snippet-navbar-min') ?>
				<!-- –––––––––––––––––––– -->

				<!--–––– Content Grid ––––-->
					This is a project page…
				<!-- –––––––––––––––––––– -->

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