<!--
Project Title: E-Commerce
Version: 1.4
Authors: Fredrick Ondieki, Michael Weaver
Date Updated: 11/11/2018
Description:
-->
<?php  
if (count($errors) > 0) : ?>
	<div class="error">
		<?php foreach ($errors as $error) : ?>
			<p><?php echo $error ?></p>
		<?php endforeach ?>
	</div>
<?php  endif ?>
