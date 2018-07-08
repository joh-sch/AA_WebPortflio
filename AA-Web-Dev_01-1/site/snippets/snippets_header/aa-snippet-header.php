<!DOCTYPE html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

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

<!-- –––––––––––––––––––– -->


<!-- –––––– JS ––––––––– -->

	<!-- jQuery -->
		<?= js('assets/js/jquery-3.2.1.min.js') ?>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

	<!-- Interactions -->
		<?= js('assets/js/tbn-js-interact.js') ?>

	<!-- barba.js -->
		<?= js('assets/js/aa-js-barba.js') ?>

<!-- ––––––––––––––––––– -->


<!-- ************************************************** -->
<!-- ************************************************** -->


</head>
<body>