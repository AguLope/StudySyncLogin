// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/11.6.0/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/11.6.0/firebase-analytics.js";
import { getAuth } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-auth.js";

// Your web app's Firebase configuration
const firebaseConfig = {
    apiKey: "AIzaSyAZUxhVlWo9wfCbQNfRjCUIVu3pqkqYODU",
    authDomain: "loginstudysync.firebaseapp.com",
    projectId: "loginstudysync",
    storageBucket: "loginstudysync.firebasestorage.app",
    messagingSenderId: "602364776071",
    appId: "1:602364776071:web:bd35ce2d284a060211f222",
    measurementId: "G-KH11195EHM"
};

// Initialize Firebase
if (!firebase.apps.length) {
    firebase.initializeApp(firebaseConfig);
}

console.log('Firebase config loaded and initialized');

const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
const auth = getAuth(app);

// Export auth for use in other files
export { auth };