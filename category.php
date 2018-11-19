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

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>A Warm Welcome!</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
            <p><a class="btn btn-primary btn-large">Call to action!</a>
            </p>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Product</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

         <?php get_products_in_cat_page(); ?>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
<?php include("Includes/Front/footer.php") ?>
