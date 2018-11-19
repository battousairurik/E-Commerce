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
<?php require_once("config.php"); ?>
<div id="wrapper">

    <?php include("admin_navigation.php") ?>

    <div id="page-wrapper">

        <div class="container-fluid">


            <div class="col-lg-12">


                <h1 class="page-header">
                    Users

                </h1>
                <p class="bg-success">
                    <?php echo $message; ?>
                </p>

                <a href="add_user.php" class="btn btn-primary">Add User</a>


                <div class="col-md-12">

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Photo</th>
                            <th>Username</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php display_users() ?>

                        </tbody>
                    </table> <!--End of Table-->


                </div>


            </div>


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
