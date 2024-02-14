<?php
function editFunction($email, $password, $name, $phone, $address, $userType, $image) {
    // Validate form data
    if (empty($email) || empty($name) || empty($phone) || empty($address) || empty($userType)) {
        return "Required fields are missing";
    }

    // // File upload handling
    // if (!empty($image)) {
    //     $targetDirectory = "../../public/images/users/"; // Directory to store the uploaded images
    //     $targetFile = $targetDirectory . basename($image["name"]); // Get the file name
    //     $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION)); // Get the file extension
    //     if (!move_uploaded_file($image["tmp_name"], $targetFile)) {
    //         echo "Sorry, there was an error uploading your file.";
    //         return;
    //     }
    // }

    include_once __DIR__ . "/../../../config/database.php"; // Include your database configuration file
    // Hash the password if it is provided
    $hashedPassword = !empty($password) ? password_hash($password, PASSWORD_DEFAULT) : null;

    // Prepare SQL statement to update data in the users table
    $sql = "UPDATE users SET name=?, email=?, phone=?, address=?, password=?, user_type=?, image=? WHERE email=?";
    $stmt = $conn->prepare($sql);

    // Bind parameters and execute the statement
    $stmt->bind_param("ssisssss", $name, $email, $phone, $address, $hashedPassword, $userType, $targetFile, $email);
    $stmt->execute();

    // Check if the update was successful
    if ($stmt->affected_rows > 0) {
        echo "User updated successfully.";
        header("Location: ../../user_profile.php");
        // Update session user data after successful edit
        $_SESSION['user_name'] = $name;
        $_SESSION['user_email'] = $email;
        $_SESSION['user_phone'] = $phone;
        $_SESSION['user_address'] = $address;
        $_SESSION['user_image'] = $targetFile; // Assuming $targetFile contains the new image path

        exit();
    } else {
        echo "Error updating user: " . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}

