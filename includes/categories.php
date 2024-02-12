<style>
    #categories {
        font-size: 14px;
        background-color: #f8f9fa;
    }
</style>
<?php
$category = "vegetables";

function get_category_products($category){
    $category_query = "SELECT * FROM product_sale WHERE category = '$category' LIMIT 10"; // Limit to 10 products
    $connection = mysqli_connect("localhost","root","","krishibazar");
    $result = mysqli_query($connection, $category_query);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC); // Fetch all rows
    return $rows;
}

$products = get_category_products($category);
?>

<div id="categories" class="carousel slide mt-4 mb-4 " data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="row">
                    <?php foreach ($products as $product): ?>
                        <div class="col mb-4">
                            <div class="card h-100">
                                <div class="card-body bg-">
                                    <h5 class="card-title"><?php echo $product['name']; ?></h5>
                                    <div class="image">
                                        <img src="<?php echo $product['image']; ?>" alt="product-image">
                                    </div>
                                    <p class="card-text">रू <?php echo $product['price']; ?>/unit</p>
                                    <p class="card-text">Quantity: <?php echo $product['quantity'] . $product['quantity_unit']; ?></p>
                                    <p class="card-text">Sold by: <?php echo $product['seller_id']; ?></p>
                                    <p class="card-text">Bought by: <?php echo $product['sold_id']; ?></p>
                                    <p class="card-text">Category: <?php echo $product['category']; ?></p>
                                    <div class="product-buttons">
                                        <button type="button" class="btn btn-primary" onclick="addToCart()">Add to Cart</button>
                                        <button type="button" class="btn btn-success" onclick="buyNow()">Buy Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
