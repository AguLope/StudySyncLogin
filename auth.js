// Handle email/password sign up
function signUp(email, password, name) {
    return firebase.auth().createUserWithEmailAndPassword(email, password)
        .then((userCredential) => {
            // Update user profile with name
            return userCredential.user.updateProfile({
                displayName: name
            });
        })
        .then(() => {
            console.log('Sign up successful');
            window.location.href = '../Main/LandingPage.php';
        })
        .catch((error) => {
            console.error("Error signing up:", error);
            throw error; // Re-throw the error for the calling code to handle
        });
}

// Handle email/password login
function signIn(email, password) {
    console.log('SignIn function called');
    return firebase.auth().signInWithEmailAndPassword(email, password)
        .then((userCredential) => {
            console.log('Sign in successful:', userCredential.user);
            return userCredential;
        })
        .catch((error) => {
            console.error("Error signing in:", error);
            throw error; // Re-throw the error for the calling code to handle
        });
}

// Handle Google sign in
function signInWithGoogle() {
    const provider = new firebase.auth.GoogleAuthProvider();
    return firebase.auth().signInWithPopup(provider)
        .then((result) => {
            console.log('Google sign in successful');
            window.location.href = '../Main/LandingPage.php';
        })
        .catch((error) => {
            console.error("Error signing in with Google:", error);
            throw error; // Re-throw the error for the calling code to handle
        });
}

// Check if user is already logged in
firebase.auth().onAuthStateChanged((user) => {
    console.log('Auth state changed. User:', user);
    if (user) {
        // User is signed in
        console.log('User is signed in:', user);
        // If we're on the login page, redirect to landing page
        if (window.location.pathname.includes('mainViewLog.php') || 
            window.location.pathname.includes('createAccount.php')) {
            console.log('Redirecting to landing page...');
            window.location.href = '../Main/LandingPage.php';
        }
    } else {
        // User is signed out
        console.log('User is signed out');
        // If we're on the landing page, redirect to login
        if (window.location.pathname.includes('LandingPage.php')) {
            console.log('Redirecting to login page...');
            window.location.href = '../Login/mainViewLog.php';
        }
    }
}); 