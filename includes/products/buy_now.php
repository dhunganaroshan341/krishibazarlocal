


<style>
    .grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 20px;
}

.product-card {
    /* Your existing styles for the product card */
    border: 1px solid #ccc;
    padding: 15px;
    text-align: center;
}

/* Media query for smaller screens (e.g., mobile devices) */
@media (max-width: 767px) {
    .grid-container {
        grid-template-columns: 1fr; /* Switch to a single column on smaller screens */
    }
}

</style>

<style>

.product-card-custom {
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    overflow: hidden;
   background:#fcfffad6;
}

.product-image-container {
    width: 100%;
    height: 200px;
    overflow: hidden;
}

.product-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.product-details {
    padding: 20px;
    color: black;
}

.product-title {
    font-size: 18px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}

.product-price {
    font-size: 16px;
    color: #ff6699;
}

.product-description {
    font-size: 14px;
    color: #332a07;
    line-height: 1.5;
}
.product-title{
    font-size:20px;
    color:#cda242;
}
.product-category{
    font-size:16px;
    background:linear-gradient(to right,#fefbd8 , #fff);
    color:green;
}
.buy-now{
    background-color:#f7d16e ;
}
.add-to-cart{
    color:#cda242;
   
}

</style>

<?php
        $product_id = $_GET['product_id']; // Assuming you have passed the product_id in the URL
    $seller_id = $_GET['seller_id']; // Assuming you have passed the seller_id in the URL

    // Update the sold_id in the product_sale table
    $update_query = "UPDATE product_sale SET sold_id='$seller_id' WHERE id='$product_id'";
    $update_result = mysqli_query($conn, $update_query);
    if (!$update_result) {
        die("Error updating sold_id: " . mysqli_error($conn));
    }

    // Fetch the product details
    $product_query = "SELECT * FROM product_sale WHERE id='$product_id'";
    $product_result = mysqli_query($conn, $product_query);
    if (!$product_result) {
        die("Error fetching product details: " . mysqli_error($conn));
    }
    $product = mysqli_fetch_assoc($product_result);

    // Fetch the seller's details
    $seller_query = "SELECT * FROM users WHERE id='$seller_id'";
    $seller_result = mysqli_query($conn, $seller_query);
    if (!$seller_result) {
        die("Error fetching seller details: " . mysqli_error($conn));
    }
    $seller = mysqli_fetch_assoc($seller_result);
?>

<div class="product-card product-card-custom">
    <div class="product-image-container">
        <img class="product-image img-fluid" src="<?= $product['image'] ?>" alt="Product Image">
    </div>
    <div class="product-details">
        <div class="product-title"><?= $product['name'] ?></div>
        <div class="product-price" style="color:green"><?= 'रू ' . $product['price'] . '/unit' ?></div>
        <div class="product-quantity">Quantity: <?= $product['quantity'] . ' ' . $product['quantity_unit'] ?></div>
        <div class="seller">Sold by: <a href="/krishibazar/app/views/components/user_profile.php"><?= $seller['name']?></a></div>
        <div class="product-description"><?= $product['description'] ?></div>
        <div class="product-category">Category: <?= $product['category'] ?></div>
    </div>
    <div class="product-buttons">
        <button class="btn buy-now btn-danger" onclick="cancelProduct(<?= $product['id'] ?>)">cancel</button>
    </div>
</div>


<script>
   

    function cancelProduct(product_id) {
        if (confirm("Are you sure you want to cancel?")) {
            
            
        var url = '/app/controllers/ProductController.php?product_id=' + product_id;
        window.location.href = url;
        }
     
    }
</script>

