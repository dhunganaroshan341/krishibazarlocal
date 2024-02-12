<?php
include_once __DIR__ ."/../../config/database.php";
// Assume you have already established a connection to your database
// $sold_id = $_GET['sold_id'];
$sold_id = 5;
$connection = $conn;
// Query to fetch product information from the database
$query = "SELECT * FROM product_sale WHERE sold_id = $sold_id";

$result = mysqli_query($connection, $query);

// Check if there are any products found
if (mysqli_num_rows($result) > 0) {
    ?>
    <div id="products" class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
        <?php
       while ($row = mysqli_fetch_assoc($result)) {
        $seller_id = $row['seller_id'];
        $sold_id= $row['sold_id'];
    
        // Query to fetch seller details
        $seller_query= "SELECT * FROM users WHERE id =$seller_id";
        $seller_result = mysqli_query($connection, $seller_query);
        $seller_data = mysqli_fetch_assoc($seller_result);
        $seller_name = $seller_data['name'];
        $seller_address = $seller_data['address'];
    
        // Query to fetch buyer details
        $buyer_query= "SELECT * FROM users WHERE id = $sold_id";
        $buyer_result = mysqli_query($connection, $buyer_query);
        $buyer_data = mysqli_fetch_assoc($buyer_result);
        $buyer_name = $buyer_data['name'];
        $buyer_address = $buyer_data['address'];
            ?>
            <div class="col mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['name']; ?></h5>
                        <div class="image">
                            <img src="<?php echo $row['image']?>' alt="product-image">
                        </div>
                        <p class="card-text">रू <?php echo $row['price']; ?>/unit</p>
                        <p class="card-text">Quantity: <?php echo $row['quantity'] . $row['quantity_unit']; ?></p>
                        <p class="card-text">Sold by: <?php echo $seller_name; ?></p>
                        <p class="card-text">Bought by: <?php echo $buyer_name; ?></p>
                        <p class="card-text"> Address from: <?php echo $seller_address; ?></p>
                        <p class="card-text">To : <?php echo $buyer_address; ?></p>
                        <p class="card-text">Category: <?php echo $row['category']; ?></p>
                        <button type="button" class="btn btn-danger">Cancel</button>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        // If no products are found
        echo "No products found.";
    }
    ?>
</div>

<script>
    function addToCart() {
        window.location.href = 'cart.php';
    }

    function buyNow() {
        if (confirm("Are you sure you want to buy?")) {
            alert('Thank you for your purchase!');
            window.location.href = "buy_process.php";
        }
    }
</script>