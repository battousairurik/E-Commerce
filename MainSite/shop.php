<?php include("Includes/Front/Header.php");?>
    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header>
            <h1>Shop</h1>
        </header>

        <hr>

        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

         <?php include("get_product_in_category.php"); ?>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
<?php require_once("Includes/Back/Footer.php");?>
