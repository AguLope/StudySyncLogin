<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudySync - Create Account</title>
    <link rel="stylesheet" href="../Assets/css/LogStyle.css">
    <!-- Firebase SDK CDN -->
    <script src="https://www.gstatic.com/firebasejs/10.8.0/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.8.0/firebase-auth-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.8.0/firebase-analytics-compat.js"></script>
    <!-- Your Firebase Config and Auth Scripts -->
    <script src="../Assets/js/firebase-config.js"></script>
    <script src="../Assets/js/auth.js"></script>
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <h1>StudySync</h1>
        </div>
        <form id="createAccountForm">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <button type="button" class="login-button" onclick="
                if(document.getElementById('password').value === document.getElementById('confirm_password').value) {
                    signUp(document.getElementById('email').value, document.getElementById('password').value, document.getElementById('name').value);
                } else {
                    alert('Passwords do not match!');
                }
            ">Create Account</button>
        </form>
        <div class="divider">
            <span>OR</span>
        </div>
        <button class="google-button" onclick="signInWithGoogle()">
            <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" alt="Google logo">
            Sign up with Google
        </button>
        <div class="create-account">
            <button onclick="window.location.href='mainViewLog.php'">Back to Login</button>
        </div>
    </div>
</body>
</html>
