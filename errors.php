<!--PROJECT NAME: Login and Registration pages
	VERSION: 1.0
	MODULE & VERSION: Apache/2.4.23 (Win64) PHP/5.6.25
	PROGRAMMERS:JESUS_LEON
				FREDRICK_ONDIEKI
				BRYAN_PELLEGRIM
				DENNIS_WITT
	DATE: AUGUST 31, 2017
	SYNOPSIS:	This module is to capture errors .
	REFERENCES: http://www.inmotionhosting.com/support/edu/website-design/using-php-and-mysql/php-insert-database
				https://www.youtube.com/watch?v=C--mu07uhQw
				https://www.youtube.com/watch?v=FgSysHTsb6A
 -->
<?php  
if (count($errors) > 0) : ?>
	<div class="error">
		<?php foreach ($errors as $error) : ?>
			<p><?php echo $error ?></p>
		<?php endforeach ?>
	</div>
<?php  endif ?>
