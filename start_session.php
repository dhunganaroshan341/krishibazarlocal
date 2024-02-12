<?php
if (session_status() === PHP_SESSION_NONE && basename($_SERVER['PHP_SELF']) !== 'login.php') {
    // Start the session
    session_start();
}
?>