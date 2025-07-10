<?php
require_once 'inc.koneksi.php';
require_once 'class/class.User.php';

if (isset($_POST['btnLogin'])) {
    $inputemail = $_POST['email'];
    $inputpassword = $_POST['password'];

    $objUser = new User();
    $objUser->ValidateEmail($inputemail);

    if ($objUser->hasil) {
        $ismatch = password_verify($inputpassword, $objUser->password);
        if ($ismatch) {
            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['userid'] = $objUser->userid;
            $_SESSION['email'] = $objUser->email;
            $_SESSION['name'] = $objUser->name;
            $_SESSION['role'] = $objUser->role;
            $_SESSION['address'] = $objUser->address;

            echo "<script>alert('Login successful!');</script>";

            if ($objUser->role == 'admin') {
                echo '<script>window.location="dashboardadmin.php";</script>';
            } else {
                echo '<script>window.location="dashboardclient.php";</script>';
            }
        } else {
            echo "<script>alert('Incorrect Password!');</script>";
        }
    } else {
        echo "<script>alert('Email not found!');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Login Page</title>
    <link rel="stylesheet" href="pages/assets/sass/login.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="post" autocomplete="on">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required autocomplete="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required autocomplete="current-password">
            </div>
            <button type="submit" name="btnLogin" class="login-button">Log in</button>
            <div class="register-link">
                Don't have an account? <a href="register.php">Register</a>
            </div>
        </form>
    </div>
</body>
</html>

