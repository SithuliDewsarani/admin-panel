<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="auth-body">

<div class="auth-wrapper">

    <div class="auth-brand">
        <img src="images/logo.png" alt="Logo">
        <h1>Admin Panel</h1>
        <p>Manage your website easily and securely.</p>
    </div>

    <div class="auth-card">

        <div class="auth-logo-mobile">
            <img src="images/logo.png" alt="Logo">
        </div>

        <h2>Welcome Back</h2>
        <p class="auth-subtitle">Sign in to continue to your dashboard.</p>

        <form action="index.php" method="post">

            <div class="form-group">
                <label>Username</label>
                <input
                    type="text"
                    name="username"
                    placeholder="Enter username"
                    required
                >
            </div>

            <div class="form-group">
                <label>Password</label>
                <input
                    type="password"
                    name="password"
                    placeholder="Enter password"
                    required
                >
            </div>

            <div class="form-options">
                <label class="remember">
                    <input type="checkbox">
                    Remember me
                </label>

                <a href="forget-password.php">
                    Forgot Password?
                </a>
            </div>

            <button type="submit" class="primary-btn">
                Sign In
            </button>

        </form>

        <p class="auth-footer">
            Secure Admin Access
        </p>

    </div>

</div>

</body>
</html>