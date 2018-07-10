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


	<div class="wrapper--global">

		<div class="main-wrapper" id="main-wrapper"> <!-- THIS IS THE BARBA MAIN WRAPPER! -->
			<div class="main-container" data-namespace="home"> <!-- THIS IS THE BARBA MAIN CONTAINER! -->

				<!-- –––––– Navbar –––––– -->
					<?php snippet('/snippets_menus/aa-snippet-navbar') ?>
				<!-- –––––––––––––––––––– -->

				<!-- –––– Filter Menu –––– -->
					<div class="menu--navbar--bottom-wrapper z--topmost" id="FilterMenu">

						<div class="menu--navbar--section_md_filter_blank hidden--vis" id="">
							
						</div>

						<div class="menu--navbar--section_md_filter_blank hidden--vis" id="">
							
						</div>

						<div class="menu--navbar--section_md_filter_blank hidden--vis" id="">
							
						</div>

						<div class="menu--navbar--section_md_filter" id="FilterMenuButton">
							
						</div>
						
					</div>
				<!-- ––––––––––––––––––––– -->

				<!--–––– Content Grid ––––-->
					<?php snippet('/snippets_content/aa-snippet-content-grid') ?>
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