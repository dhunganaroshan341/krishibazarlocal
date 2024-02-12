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
<div class="product-card">
    <div class="product-image-container">
        <img class="product-image img-fluid" src="<?= $product['image'] ?>" alt="Product Image">
    </div>
    <div class="product-details">
        <div class="product-title"><?= $product['name'] ?></div>
        <div class="product-price" style="color:green"><?= 'रू ' . $product['price'] . '/unit' ?></div>
        <div class="product-quantity">Quantity: <?= $product['quantity'] . ' ' . $product['quantity_unit'] ?></div>
        <div class="seller">Sold by: <a href="/krishibazar/app/views/components/user_profile.php"><?= $product['seller_id'] ?></a></div>
        <div class="product-description"><?= $product['description'] ?></div>
        <div class="product-category">Category: <?= $product['category'] ?></div>
    </div>
    <div class="product-buttons">
        <button type="button" class="btn btn-primary" onclick="addToCart()">Add to Cart</button>
        <button type="button" class="btn btn-success" onclick="buyNow()">Buy Now</button>
    </div>
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

