<?php
require_once 'inc.koneksi.php';
require_once 'class/class.User.php';

if (isset($_POST['submit'])) {
    $objUser = new User();
    $objUser->email = $_POST['email'];
    $objUser->password = password_hash($_POST['password'], PASSWORD_DEFAULT); // hashing
    $objUser->name = $_POST['name'];
    $objUser->address = $_POST['address'];
    $objUser->role = "client"; // default role client

    $objUser->AddUser();

    if ($objUser->hasil) {
        echo "<script>alert('Registration successful! Please login.'); window.location='login.php';</script>";
    } else {
        echo "<script>alert('Registration failed: ".$objUser->message."'); window.location='register.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Register Page</title>
    <link rel="stylesheet" href="assets/sass/register.css">
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form method="post" autocomplete="on">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea name="address" rows="3"></textarea>
            </div>
            <button type="submit" name="submit" class="register-button">Register</button>
            <div class="login-link">
                Already have an account? <a href="login.php">Login</a>
            </div>
        </form>
    </div>
</body>
</html>
