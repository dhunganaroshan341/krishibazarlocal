<?php
include_once __DIR__ . "/../config/database.php";

$product_query = "SELECT * FROM product_sale";
$result = mysqli_query($conn, $product_query);

$products = array(); // Initialize an empty array to store the fetched products

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
    // Loop through each row of data
    while ($row = mysqli_fetch_assoc($result)) {
        // Store each row as an element in the $products array
        $products[] = $row;
    }
} else {
    // If no products are found
    echo "No products found.";
}

// Shuffle the products array
shuffle($products);
?>

<div class="grid-container container-fluid mt-4">
    <style>
        .grid-container {
            display: grid;
            justify-content: space-around; /* Optional: adjust as needed */
            align-items: center;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }
    </style>
    <?php
    foreach ($products as $product) :
        include __DIR__."/../app/views/components/product_card.php"; // Pass each selected product to the product_card.php component
    endforeach;
    ?>
</div>
