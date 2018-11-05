<!--
Project Title: E-Commerce
Version: 1.3
Authors: Fredrick Ondieki, Michael Weaver
Date Updated: 11/4/2018
Description: Error display page
-->
<?php  
if (count($errors) > 0) : ?>
	<div class="error">
		<?php foreach ($errors as $error) : ?>
			<p><?php echo $error ?></p>
		<?php endforeach ?>
	</div>
<?php  endif ?>
