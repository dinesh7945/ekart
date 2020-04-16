<?php
include "includes/db.php";
?>

<!DOCTYPE html>
<html>

<?php
session_start();

if (isset($_SESSION['admin_email'])) {
    // $_SESSION['admin_email'] += 1;
} else {
    $_SESSION['admin_email'] = 1;
}
// $msg = "You have visited this page " .  $_SESSION['admin_email'];
// $msg .= "in this session.";
?>

<head>
    <meta charset="UTF-8">
    <title>Admin Login Form</title>
    <link rel="stylesheet" href="csslogin/style.css">

</head>

<body>

    <div class="login">
        <div class="login-triangle"></div>

        <h2 class="login-header">Admin Log in</h2>

        <form class="login-container" method="POST">
            <p><input type="email" name="admin_email" placeholder="Email"></p>
            <p><input type="password" name="admin_pass" placeholder="Password"></p>
            <p><input type="submit" name="login" value="Login"></p>
        </form>
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>





</body>

</html>


<?php

if (isset($_POST['login'])) {

    $admin_email = $_POST['admin_email'];
    $admin_pass = $_POST['admin_pass'];


    $sel_admin = "SELECT * FROM admins WHERE
     admin_email='$admin_email' AND admin_pass='$admin_pass'";

    $run_admin = mysqli_query($con, $sel_admin);

    $check_admin = mysqli_num_rows($run_admin);


    if ($check_admin) {

        $ad_email = $_SESSION['admin_email'];

        echo "<script>alert('Sucessfully login')</script>";
        echo "<script>window.open('dashboard.php?login','_self')</script>";

    } else {
        echo "<script>alert('Admin email or password in wrong,try again')</script>";
        session_destroy();
    }
}


?>