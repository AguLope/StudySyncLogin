<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudySync - Dashboard</title>
    <link rel="stylesheet" href="../Assets/css/LandingStyle.css">
    <!-- Firebase SDK CDN -->
    <script src="https://www.gstatic.com/firebasejs/10.8.0/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.8.0/firebase-auth-compat.js"></script>
    <script src="../Assets/js/firebase-config.js"></script>
</head>
<body>
    <nav class="navbar">
        <div class="logo">StudySync</div>
        <div class="nav-links">
            <a href="#">Dashboard</a>
            <a href="#">Study Groups</a>
            <a href="#">Calendar</a>
            <a href="#">Resources</a>
        </div>
        <div class="user-info">
            <img id="userPhoto" src="https://via.placeholder.com/40" alt="User Photo">
            <span id="userName" class="user-name">Loading...</span>
            <button class="logout-button" onclick="signOut()">Logout</button>
        </div>
    </nav>

    <div class="main-content">
        <div class="welcome-section">
            <h1>Welcome to StudySync</h1>
            <p>Your all-in-one platform for collaborative learning and academic success. Connect with peers, join study groups, and access valuable resources to enhance your learning experience.</p>
        </div>

        <div class="features-grid">
            <div class="feature-card">
                <h3>Study Groups</h3>
                <p>Join or create study groups with your peers. Collaborate on projects, share notes, and learn together.</p>
            </div>
            <div class="feature-card">
                <h3>Calendar</h3>
                <p>Keep track of your study sessions, assignments, and exams with our integrated calendar system.</p>
            </div>
            <div class="feature-card">
                <h3>Resources</h3>
                <p>Access a wide range of educational resources, including study materials, practice tests, and more.</p>
            </div>
        </div>
    </div>

    <script>
        // Check if user is logged in
        firebase.auth().onAuthStateChanged((user) => {
            if (user) {
                // User is signed in
                document.getElementById('userName').textContent = user.displayName || user.email;
                if (user.photoURL) {
                    document.getElementById('userPhoto').src = user.photoURL;
                }
            } else {
                // User is signed out, redirect to login
                window.location.href = '../Login/mainViewLog.php';
            }
        });

        // Sign out function
        function signOut() {
            firebase.auth().signOut().then(() => {
                window.location.href = '../Login/mainViewLog.php';
            }).catch((error) => {
                console.error("Error signing out:", error);
                alert("Error signing out. Please try again.");
            });
        }
    </script>
</body>
</html>
