<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login Page</title>
    <link rel="stylesheet" href="assets/sass/login.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form autocomplete="on">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required autocomplete="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required autocomplete="current-password">
            </div>
            <div class="form-options">
                <label><input type="checkbox" name="remember" /> Remember Me</label>
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" class="login-button">Log in</button>
            <div class="register-link">
                Don't have an account? <a href="register.php">Register</a>
            </div>
        </form>
    </div>
</body>
</html>
