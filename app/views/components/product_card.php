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
<div class="product-card product-card-custom">
    <div class="product-image-container">
        <img class="product-image img-fluid" src="<?= $product['image'] ?>" alt="Product Image">
    </div>
    <div class="product-details">
        <div class="product-title"><?= $product['name'] ?></div>
        <div class="product-price" style="color:green"><?= 'रू ' . $product['price'] . '/unit' ?></div>
        <div class="product-quantity">Quantity: <?= $product['quantity'] . ' ' . $product['quantity_unit'] ?></div>
        <?php
        $seller_id = $product['seller_id'];
             $sql = "SELECT name FROM users WHERE id='$seller_id'";
             $result = mysqli_query($conn, $sql);
             if (mysqli_num_rows($result) > 0) {} else die("Error in query");
             $row = mysqli_fetch_assoc($result);
        ?>
        <div class="seller">Sold by: <a href="/krishibazar/app/views/components/user_profile.php"><?= $row['name']?></a></div>
        <div class="product-description"><?= $product['description'] ?></div>
        <div class="product-category">Category: <?= $product['category'] ?></div>
    </div>
    <div class="product-buttons">
        <button type="button" class="btn  add-to-cart " onclick="addToCart()">Add to Cart</button>
        <button type="button" class="btn buy-now" onclick="buyNow()">Buy Now</button>
    </div>
</div>


<script>
    function addToCart() {
        window.location.href = 'cart.php';
    }

    function buyNow() {
        if (confirm("Are you sure you want to buy?")) {
            alert('Thank you for your purchase!');
            window.location.href = "buy_now.php";
        }
    }
</script>

