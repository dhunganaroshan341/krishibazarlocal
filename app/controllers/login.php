<?php
function loginFunction($email, $password) {
    // Database connection parameters (modify as needed)
    $servername = "localhost";
    $username = "root";
    $db_password = ""; // Change this if your database password is different
    $dbname = "krishibazar";

    // Create connection
    $conn = new mysqli($servername, $username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to retrieve user data by email
    $sql = "SELECT id, name, email, password, user_type FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);

    // Bind parameters and execute the statement
    $stmt->bind_param("s", $email);
    $stmt->execute();

    // Store the result for further processing
    $result = $stmt->get_result();

    // Check if the user exists
    if ($result->num_rows == 1) {
        // Fetch user data
        $userData = $result->fetch_assoc();
        $hashedPassword = $userData['password'];
        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            // Password is correct, set session variables or redirect the user
            session_start();
            $_SESSION['user_id'] = $userData['id'];
            $_SESSION['user_name'] = $userData['name'];
            $_SESSION['user_email'] = $userData['email'];
            // Redirect the user to a dashboard or home page
            sleep(3);
            $location =  "/../../krishibazar/index.php";
            header("Location: $location");
            exit();
        } else {
            // Password is incorrect, display an error message
            return "Incorrect email or password.";
        }
    } else {
        // User with the provided email does not exist, display an error message
        return "User with this email does not exist.";
    }

    // Close statement and connection
    
}
?>
