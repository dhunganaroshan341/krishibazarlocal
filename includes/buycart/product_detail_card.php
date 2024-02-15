<?php
include_once __DIR__ . "/../../config/database.php";
include_once __DIR__ . "/../../start_session.php";

// Assume you have already established a connection to your database
$connection = $conn;

// Get the user ID from the session
$user_id = $_SESSION['user_id'];

// Query to fetch product information from the database
$query = "SELECT * FROM product_sale WHERE sold_id = $user_id";

$result = mysqli_query($connection, $query);

// Check if there are any products found
if (mysqli_num_rows($result) > 0) {
    ?>
    <div id="products" class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['name']; ?></h5>
                        <div class="image">
                            <img src="<?php echo $row['image']; ?>" alt="product-image">
                        </div>
                        <p class="card-text">रू <?php echo $row['price']; ?>/unit</p>
                        <p class="card-text">Quantity: <?php echo $row['quantity'] . $row['quantity_unit']; ?></p>
                        <p class="card-text">Sold by: <?php echo $row['seller_id']; ?></p>
                        <p class="card-text">Bought by: <?php echo $row['sold_id']; ?></p>
                        <p class="card-text">Category: <?php echo $row['category']; ?></p>
                        <p class="card-text">status: <?php echo $row['status']; ?></p>
                        <?php // Add any additional information here ?>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
} else {
    // If no products are found
    echo "No purchases found for this user.";
}
?>
