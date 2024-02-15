<?php
if (session_status() === PHP_SESSION_NONE && basename($_SERVER['PHP_SELF']) !== 'login.php') {
    // Start the session
    session_start();
    include_once __DIR__."/config/database.php";
    if(isset($_SESSION['user_id'])) {
        $user_id =$_SESSION['user_id'];
        $sql = "SELECT * FROM users WHERE id=$user_id";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_assoc($result);
        $user_name = $row['name'];
        $user_id = $row['id'];
        $user_image = $row['image'];
        $user_email = $row['email'];
        $user_password = $row['password'];
        $user_address = $row['address'];
        $user_phone = $row['phone'];
        $user_type = $row['user_type'];
        

    }
     else{$_SESSION['user_id'] = null;}}}

    