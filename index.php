<!--
Project Title: E-Commerce
Version: 1.4
Authors: Fredrick Ondieki, Michael Weaver
Date Updated: 11/11/2018
Description:
-->
<?php require_once("config.php"); ?>

<?php include("Includes/Front/header.php") ?>


    <!-- Page Content -->
    <div class="container">

        <div class="row">

          <?php include("Includes/Front/side_nav.php") ?>


            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">

                      <?php include("Includes/Front/slider.php") ?>
                        
                    </div>

                </div>

                <div class="row">

                    <?php get_products(); ?>


                </div><!-- ROw ends here-->

            </div>

        </div>

    </div>
    <!-- /.container -->
<?php include("Includes/Front/footer.php") ?>