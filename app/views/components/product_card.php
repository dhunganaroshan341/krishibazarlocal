<?php include_once __DIR__."/../../../start_session.php";
$user_id = $_SESSION['user_id'];  ?>


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
<?php
$product_images = [
    'dairy' => 'dairy.jpg',
    'Dairy' => 'dairy.jpg',
    'vegetables' => 'vegetables.jpg',
    'Vegetables' => 'vegetables.jpg',
    'meat' => 'meat.jpeg',
    'Meat' => 'meat.jpeg',
    ' खाद्य' =>'grains.jpg',
    'सब्जी तथा फलफूल'=>'vegetables.jpg',
    'fruits' => 'fruits.jpeg',
    'fruit' => 'fruits.jpeg',
    'grains' => 'grains.jpg',
    'Grains' => 'grains.jpg',
    
    'other' => 'beverages.jpg',
    'seeds' => '65ca5739732d5_79278360_132467441530653_1510391830221422592_n.jpg',
    'fertilizer' => 'fertilizer.jpg',
    'pesticide' => 'fertilizer.jpg',
    // Add more categories as needed
];

$category = $product['category'];
$image_path = $product_images[$category];

?>

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
    <img class="product-image img-fluid" src="public/images/products/<?php echo $image_path;?>" alt="Product Image">
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
        <div class="product-category">manufactured: <?= $product['category'] ?></div>
    </div>
    
    <div class="product-buttons">
    <button name="add_to_cart" class="btn add-to-cart" onclick="addToCart(<?php echo $product['id']; ?>)">Add to Cart</button>
    <button name="buy_now" class="btn buy-now" onclick="buyNow(<?php echo $product['id']; ?> , <?php echo $user_id; ?>)">Buy Now</button>
</div>
</div>



<script>
    sold_id = <?php echo $product['sold_id'];?>
    // function addToCart(product_id,seller_id) {
        
    //     var url = 'app/controllers/add_to_cart.php?product_id=' + product_id + '&sold_id=' + sold_id;
    //     window.location.href = url;
    // }

    function buyNow(product_id,sold_id) {
        if (confirm("Are you sure you want to buy?")) {
            alert('Thank you for your purchase!');
           
        var url = 'app/controllers/buy_product.php?product_id=' + product_id + '&sold_id=' + sold_id;
        window.location.href = url;
        }
     
    }
</script>
<?php

