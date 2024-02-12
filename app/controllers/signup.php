<?php
include_once __DIR__."/../../app/models/UserModel.php";

function signupFunction($email, $password, $name, $phone, $address, $userType, $image) {
    // Validate form data
    if(empty($email) || empty($password) || empty($name) || empty($phone) || empty($address) || empty($userType)) {
        return  "Required fields are missing";
    }

    // File upload handling
    $targetDirectory = "../../public/images/users/"; // Directory to store the uploaded images
    $targetFile = $targetDirectory . basename($image["name"]); // Get the file name
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION)); // Get the file extension

    // Check if the file is an image
    $check = getimagesize($image["tmp_name"]);
    if($check === false) {
        echo "File is not an image.";
        return;
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        return;
    }

    // Move the file to the specified directory
    if (!move_uploaded_file($image["tmp_name"], $targetFile)) {
        echo "Sorry, there was an error uploading your file.";
        return;
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $db_password = ""; // Changed variable name to avoid conflict

    $dbname = "krishibazar";

    // Create connection
    $conn = new mysqli($servername, $username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to insert data into the users table
    $sql = "INSERT INTO users (name, email, phone, address, password, user_type, image) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters and execute the statement
    $stmt->bind_param("sssssss", $name, $email, $phone, $address, $hashedPassword, $userType, $targetFile);
    $stmt->execute();

    // Check if the insertion was successful
    if ($stmt->affected_rows > 0) {
        echo "User registered successfully.";
        header("Location: ../../settings.php");
        exit();
        // You can redirect the user to a success page or perform any other actions here
    } else {
        echo "Error registering user: " . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}

