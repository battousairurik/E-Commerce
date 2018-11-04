<!--This module is the connection to the database
and start a session from the session_start
-->
<?php
session_start(); // Session connection to the database
$_SESSION['message'] = '';

// VARIABLES TO DECLARE.
$username = "";
$email    = "";
$FirstName = "";
$MiddleName = "";
$LastName = "";
$PhoneNumber = "";
$errors = array();
$_SESSION['success'] = "";

// Database connection
$db = mysqli_connect('localhost', 'root', '', 'mydatabase');

// Register user from the Registration Page by receiving all entries from the form
if (isset($_POST['RegisterUser'])) {
    $FirstName = mysqli_real_escape_string($db, $_POST['FirstName']);
    $MiddleName = mysqli_real_escape_string($db, $_POST['MiddleName']);
    $LastName = mysqli_real_escape_string($db, $_POST['LastName']);
    $PhoneNumber = mysqli_real_escape_string($db, $_POST['PhoneNumber']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // Validates the user entries for null or empty fields
    if (empty($FirstName)) { array_push($errors, "First Name is required."); }
    if (empty($LastName)) { array_push($errors, "Last Name is required."); }
    if (empty($PhoneNumber)) { array_push($errors, "Phone Number is required."); }
    if (empty($username)) { array_push($errors, "Username is required."); }
    if (empty($email)) { array_push($errors, "Email is required."); }
    if (empty($password_1)) { array_push($errors, "Password is required."); }
    if ($password_1 != $password_2) {
        array_push($errors, "Passwords do not match, please try again.");
    }

    // Save data to the database
    if (count($errors) == 0) {
        $password = md5($password_1);// Save the encrypted form of password to thd database
        $query = "INSERT INTO users (FirstName, MiddleName, LastName, PhoneNumber, username, email, password)
     " . "VALUES ('$FirstName', '$MiddleName', '$LastName', '$PhoneNumber','$username', '$email', '$password')";
        mysqli_query($db, $query);

        //Successful user Registration
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Registration Successful!";
        header('location: login.php');
    }

}

// USER LOGIN
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    // CAPTURE IF USERNAME AND/OR PASSWORD FIELDS WERE EMPTY
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    // CAPTURE IF PASSWORDS DON'T MATCH.
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);

        // SUCCESSFULL ENTRY
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: Admin');
        }else {
            array_push($errors, "Wrong username/password. Please try again.");
        }
    }
}
