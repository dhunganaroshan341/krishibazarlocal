<?php
// Assume you have already connected to the database and fetched the product details into an array called $products
// Example of fetching products from the database
// $products = $db->query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC);

foreach ($products as $product) {
?>
<div class="card">
  <img src="<?php echo $product['image_url']; ?>" class="card-img-top" alt="<?php echo $product['name']; ?>">
  <div class="card-body">
    <h5 class="card-title"><?php echo $product['name']; ?></h5>
    <p class="card-text"><?php echo $product['description']; ?></p>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Category: <?php echo $product['category']; ?></li>
      <li class="list-group-item">Quantity: <?php echo $product['quantity']; ?></li>
      <li class="list-group-item">Base Price: $<?php echo number_format($product['base_price'], 2); ?></li>
      <li class="list-group-item">Product Type: <?php echo $product['product_type']; ?></li>
      <li class="list-group-item">Price: $<?php echo number_format($product['price'], 2); ?></li>
      <li class="list-group-item">Harvest Date: <?php echo $product['harvest_date']; ?></li>
    </ul>
    <a href="update_product.php?id=<?php echo $product['id']; ?>" class="btn btn-primary">Update</a>
    <!-- Assuming you have a page for updating the product with the product ID passed via URL -->
  </div>
</div>
<?php
}
?>
