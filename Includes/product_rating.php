<!--
Project Title: E-Commerce
Version: 1.5
Authors: Fredrick Ondieki, Michael Weaver
Date Updated: 11/17/2018
Description: Partial Page used for rating a product
-->

<div class="item-rating">
    Rate this product:<br>
    <?php foreach(range(1, 5) as $rating): ?>
        <a href="../rate_helper.php?product=<?php echo product_id; ?>&rating=<?php echo $rating; ?>"><img src="../Images/star.jpg"></a>
    <?php endforeach; ?>

</div>