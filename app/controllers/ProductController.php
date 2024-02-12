<?php
if(isset($_POST['sell'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $image = $_POST['image'];

    $sql = "INSERT INTO products (name, price, quantity, description, category, image) VALUES ('$name', '$price', '$quantity', '$description', '$category', '$image')";
    $result = mysqli_query($conn, $sql);

    if($result) {
        echo "Product added successfully.";
    } else {
        echo "Error adding product: " . mysqli_error($conn);
    }
}

}
