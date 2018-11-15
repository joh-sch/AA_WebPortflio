<?php 
$homepage = page('aa-home');
$portrait = $homepage->images()->shuffle()->first()
?>

<div class="menu--navbar--icon z--topmost" id="MainMenuButton" onclick="">
	<img 
		src="<?= $portrait->url() ?>"
		id="brandIcon">
</div>