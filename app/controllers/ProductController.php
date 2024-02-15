<?php
include_once __DIR__."/../../config/database.php";
include_once __DIR__."/FileController.php";
include_once __DIR__."/../../start_session.php";
if(isset($_POST['sell'])) {
    $user_email = $_SESSION['user_email'];
    $sql = "SELECT * FROM users WHERE email='$user_email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $seller_id = $row['id'];
echo  $seller_id;
echo  "<br>";
echo $row['email'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    // $product_type = $_POST['$product_type'];
    $category = $_POST['category'];
    $image = $_FILES['image'];
    $imageName = imageUpload($image);

    if ($imageName) {
        // Image upload successful, proceed to insert into database
        $sql = "INSERT INTO product_sale (seller_id,name, price, quantity, description, category, image) VALUES ('$seller_id','$name', '$price', '$quantity', '$description', '$category', '$imageName')";
        $result = mysqli_query($conn, $sql);
    
        if ($result) {
            echo 'Product added successfully.';
            header ('Location: ../../sell.php');
        } else {
            echo 'Error inserting product into database.';
        }
    } else {
        // Image upload failed
        echo 'Error uploading image.';
    }
}
if(isset($_GET['buy_now'])) {
    $product_id = "SELECT  id FROM products WHERE name='".$_GET["product"]."'";
}
public function 


