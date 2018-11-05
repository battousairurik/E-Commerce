<!--
Project Title: E-Commerce
Version: 1.3
Authors: Fredrick Ondieki, Michael Weaver
Date Updated: 11/4/2018
Description: Main site category display page
-->

<?php include("Includes/Front/Header.php");?>
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
                <h3>Latest Products </h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <?php include("get_product_in_category.php");?>

        <!-- /.row -->

        <hr>

        <?php require_once("Includes/Back/Footer.php");?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../Includes/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../Includes/js/bootstrap.min.js"></script>

</body>

</html>
