<?php
if (session_status() === PHP_SESSION_NONE && basename($_SERVER['PHP_SELF']) !== 'settings.php') {
    // Start the session
    session_start();
}
// AuthController.php

// Include any necessary files or configurations here

// Check if the form submission is from the login form
// Check if the form submission is from the login form
if (isset($_POST['login'])) {
    // Call login function
    include_once __DIR__ . "/login.php";
    // loginFunction($_POST['email'], $_POST['password']);
$email = $_POST['email'];
$password=$_POST['password'];

    $resultMessage = loginFunction($email, $password);
if ($resultMessage !== true) {
    // Redirect to settings.php with an alert message
    $location = "/../../krishibazar/settings.php?message=" . urlencode($resultMessage);
    header("Location: $location");
    exit();
}

}

// Check if the form submission is from the signup form
if (isset($_POST['signup'])) {
    include_once __DIR__ . "/signup.php";
    $name = $_POST['name'];
    $email =  $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $image = $_FILES['image'];
    $address = $_POST['address'];
    $userType = $_POST['userType'];
    signupFunction($email, $password, $name, $phone, $address, $userType, $image);
}

if(isset($_POST['user_edit'])){
    include_once __DIR__ . "/functions/user_edit.php";
    $name = $_POST['name'];
    $email = isset($_POST['email']) ? $_POST['email'] : $_SESSION['user_email'];

    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $image = $_FILES['image'];
    $address = $_POST['address'];
    $userType = $_POST['userType'];
    editFunction($email, $password, $name, $phone, $address, $userType, $image);
}
// Define login and signup functions




// Example usage:

