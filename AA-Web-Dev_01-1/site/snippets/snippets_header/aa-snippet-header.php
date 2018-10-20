<!DOCTYPE html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

	<meta name="robots" content="noindex,nofollow">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">


<!-- ************************************************** -->
<!-- ************************************************** -->


<!-- –––––– CSS ––––––––– -->
	
	<!-- Main -->
		<?= css('assets/css/aa-css-main.css') ?>
	
	<!-- Reset -->
		<?= css('assets/css/aa-css-reset.css') ?>

	<!-- Variables -->
		<?= css('assets/css/aa-css-variables.css') ?>
	
	<!-- Media Queries -->
		<?= css('assets/css/aa-css-mediaQueries.css') ?>

	<!-- Menus -->
		<?= css('assets/css/aa-css-menus.css') ?>

	<!-- Grid -->
		<?= css('assets/css/aa-css-grid.css') ?>
	<!-- Slider -->
		<?= css('assets/css/aa-css-slider.css') ?>

	<!-- PLUGINS -->
		<!-- Flickity -->
			<?= css('assets/css/flickity.css') ?>
<!-- –––––––––––––––––––– -->


<!-- –––––– JS ––––––––– -->

	<!-- jQuery -->
		<?= js('assets/js/jquery-3.2.1.min.js') ?>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

	<!-- Initilizations -->
		<?= js('assets/js/aa-js-inits.js') ?>

	<!-- Interactions -->
		<?= js('assets/js/aa-js-interact.js') ?>

	<!-- barba.js -->
		<?= js('assets/js/aa-js-barba.js') ?>

	<!-- PLUGINS -->
		<!-- Waypoints -->
			<?= js('assets/js/noframework.waypoints.min.js') ?>
		<!-- Endless.js -->
			<?= js('assets/js/endless.min.js') ?>
		<!-- Flickity -->
			<?= js('assets/js/flickity.pkgd.min.js') ?>

<!-- ––––––––––––––––––– -->


<!-- ************************************************** -->
<!-- ************************************************** -->


</head>
<body>