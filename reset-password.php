<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="auth-body">

<div class="single-auth-wrapper">

    <div class="auth-card">

        <div class="auth-logo">
            <img src="images/logo.png" alt="Logo">
        </div>

        <h2>Reset Password</h2>

        <p class="auth-subtitle">
            Enter your reset code and create a new password.
        </p>

        <form action="login.php" method="post">

            <div class="form-group">
                <label>Reset Code</label>

                <input
                    type="text"
                    name="reset_code"
                    placeholder="Enter reset code"
                    required
                >
            </div>

            <div class="form-group">
                <label>New Password</label>

                <input
                    type="password"
                    name="new_password"
                    placeholder="Enter new password"
                    required
                >
            </div>

            <div class="form-group">
                <label>Confirm Password</label>

                <input
                    type="password"
                    name="confirm_password"
                    placeholder="Confirm new password"
                    required
                >
            </div>

            <button type="submit" class="primary-btn">
                Reset Password
            </button>

        </form>

        <a href="login.php" class="back-link">
            ← Back to Login
        </a>

    </div>

</div>

</body>
</html>