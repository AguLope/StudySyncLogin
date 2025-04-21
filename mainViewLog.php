<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudySync - Login</title>
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
        <form id="loginForm" onsubmit="event.preventDefault();">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-button" onclick="handleLogin()">Login</button>
        </form>
        <div class="divider">
            <span>OR</span>
        </div>
        <button class="google-button" onclick="signInWithGoogle()">
            <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" alt="Google logo">
            Sign in with Google
        </button>
        <div class="create-account">
            <button onclick="window.location.href='createAccount.php'">Create Account</button>
        </div>
    </div>

    <script>
        // Debug: Check if Firebase is initialized
        console.log('Firebase initialized:', firebase);
        console.log('Auth available:', firebase.auth);

        // Handle login with debug logging
        function handleLogin() {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            console.log('Login attempt with email:', email);
            
            signIn(email, password)
                .then(() => {
                    console.log('Login successful, redirecting...');
                    window.location.href = '../Main/LandingPage.php';
                })
                .catch(error => {
                    console.error('Login error:', error);
                    alert('Login error: ' + error.message);
                });
        }

        // Debug: Check auth state changes
        firebase.auth().onAuthStateChanged(function(user) {
            console.log('Auth state changed:', user);
            if (user) {
                console.log('User is signed in, redirecting to landing page...');
                window.location.href = '../Main/LandingPage.php';
            }
        });
    </script>
</body>
</html>
