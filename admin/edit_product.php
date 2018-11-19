<!--
Project Title: E-Commerce
Version: 1.4
Authors: Fredrick Ondieki, Michael Weaver
Date Updated: 11/11/2018
Description:
-->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <?php include("admin_navigation.php") ?>

    <div id="page-wrapper">

        <div class="container-fluid">


            <div class="col-md-12">

                <div class="row">
                    <h1 class="page-header">
                        Add Product

                    </h1>
                </div>


                <form action="" method="post" enctype="multipart/form-data">


                    <div class="col-md-8">

                        <div class="form-group">
                            <label for="product-title">Product Title </label>
                            <input type="text" name="product_title" class="form-control">

                        </div>


                        <div class="form-group">
                            <label for="product-title">Product Description</label>
                            <textarea name="product_description" id="" cols="30" rows="10"
                                      class="form-control"></textarea>
                        </div>


                        <div class="form-group row">

                            <div class="col-xs-3">
                                <label for="product-price">Product Price</label>
                                <input type="number" name="product_price" class="form-control" size="60">
                            </div>
                        </div>


                    </div><!--Main Content-->


                    <!-- SIDEBAR-->


                    <aside id="admin_sidebar" class="col-md-4">


                        <div class="form-group">
                            <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft">
                            <input type="submit" name="publish" class="btn btn-primary btn-lg" value="Publish">
                        </div>


                        <!-- Product Categories-->

                        <div class="form-group">
                            <label for="product-title">Product Category</label>
                            <hr>
                            <select name="product_category" id="" class="form-control">
                                <option value="">Select Category</option>

                            </select>


                        </div>


                        <!-- Product Brands-->


                        <div class="form-group">
                            <label for="product-title">Product Brand</label>
                            <select name="product_brand" id="" class="form-control">
                                <option value="">Select Brand</option>
                            </select>
                        </div>


                        <!-- Product Tags -->


                        <div class="form-group">
                            <label for="product-title">Product Keywords</label>
                            <hr>
                            <input type="text" name="product_tags" class="form-control">
                        </div>

                        <!-- Product Image -->
                        <div class="form-group">
                            <label for="product-title">Product Image</label>
                            <input type="file" name="file">

                        </div>


                    </aside><!--SIDEBAR-->


                </form>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
