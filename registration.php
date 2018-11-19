<!--
Project Title: E-Commerce
Version: 1.4
Authors: Fredrick Ondieki, Michael Weaver
Date Updated: 11/11/2018
Description:
-->
<!--First, Make a connection to the Database-->
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body{
            margin: 0;
            background-size: cover;
            background-image: url('Images/leaves.jpg');
        }
    </style>
</head>
<body>
<div class="header">
    <h2>E-Commerce Members Registration</h2>
</div>

<form method="post" action="registration.php">
    <!-- Capture errors incase te user tries to pass in empty fields -->
    <?php include('errors.php'); ?>
    <div class="input-group">
        <label>First Name</label>
        <input type="text" name="FirstName" value="<?php echo $FirstName; ?>">
    </div>

    <div class="input-group">
        <label>Middle Name</label>
        <input type="text" name="MiddleName" value="<?php echo $MiddleName; ?>">
    </div>
    <div class="input-group">
        <label>Last Name</label>
        <input type="text" name="LastName" value="<?php echo $LastName; ?>">
    </div>
    <div class="input-group">
        <label>Phone Number</label>
        <input type="text" name="PhoneNumber" value="<?php echo $PhoneNumber; ?>">
    </div>
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <label>Confirm password</label>
        <input type="password" name="password_2">
    </div>
    <div class="input-group"></div>
    <p style="font-size:18px; color:#c1c9c7">
        Already have an account? <a href="login.php" style="color: #2bc0db;">Sign in</a>
    </p>
        <button type="submit" class="btn" name="RegisterUser">Register</button>

</form>
</body>
