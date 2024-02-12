<?php
session_start();

// Clear all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect the user back to the index page
header('Location: /../../krishibazar/index.php');
exit();
?>
