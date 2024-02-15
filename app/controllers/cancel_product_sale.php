<?php
include_once __DIR__."/../../config/database.php";

// Sanitize inputs
$product_id = mysqli_real_escape_string($conn, $_GET['product_id']);
$sold_id = mysqli_real_escape_string($conn, $_GET['sold_id']);

// Update query
$update_query = "UPDATE product_sale SET  status = 'available' , sold_id = null WHERE id = '$product_id'";

// Execute query
$updateresult = mysqli_query($conn, $update_query);

// Check if the update was successful 
if($updateresult) {
    header("Location: ../../sell.php");
    exit();
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

?>
