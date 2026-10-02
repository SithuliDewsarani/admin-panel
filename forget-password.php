<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="auth-body">

<div class="single-auth-wrapper">

    <div class="auth-card">

        <div class="auth-logo">
            <img src="images/logo.png" alt="Logo">
        </div>

        <h2>Forgot Password?</h2>

        <p class="auth-subtitle">
            Enter your email address and we'll help you reset your password.
        </p>

        <form action="reset-password.php" method="post">

            <div class="form-group">
                <label>Email Address</label>

                <input
                    type="email"
                    name="email"
                    placeholder="admin@example.com"
                    required
                >
            </div>

            <button type="submit" class="primary-btn">
                Continue
            </button>

        </form>

        <a href="login.php" class="back-link">
            ← Back to Login
        </a>

    </div>

</div>

</body>
</html>