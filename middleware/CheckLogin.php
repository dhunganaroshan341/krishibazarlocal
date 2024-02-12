<?php
// Check if the session has not been started yet and if the URL is not "settings"
if (session_status() === PHP_SESSION_NONE && basename($_SERVER['PHP_SELF']) !== 'settings.php') {
    // Start the session
    session_start();
}

// Check if the user is not logged in and if the URL is not "settings"
if ((!isset($_SESSION['user_name']) || !isset($_SESSION['user_email'])) && basename($_SERVER['PHP_SELF']) !== 'settings.php') {
    // Redirect to the login page after 5 seconds
    header("refresh:5;url=settings.php");
    // Optionally include an error message here if needed
}
