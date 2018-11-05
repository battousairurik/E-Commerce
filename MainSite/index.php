<!--
Project Title: E-Commerce
Version: 1.3
Authors: Fredrick Ondieki, Michael Weaver
Date Updated: 11/4/2018
Description: Home page for the main site
-->
<?php include("Includes/Front/Header.php");?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <?php include("Includes/Front/Side_Nav.php");?>


        <div class="col-md-9">

            <div class="row carousel-holder">

                <div class="col-md-12">

                    <?php include("Includes/Front/Slider.php");?>
                </div>

            </div>

            <div class="row">
                <?php include("Includes/product.php");?>

            </div>

        </div>

    </div><!--The row ends here-->

</div>
<!-- /.container -->
<?php include("Includes/Back/Footer.php");?>
<!-- /.container -->

</html>
