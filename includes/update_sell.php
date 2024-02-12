<div class="container sell" id="sell">
  <h4>Update Product</h4>
  <form action="app/controllers/ProductController.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="action" value="update">
    <!-- Add a hidden input field to indicate the action is for updating -->
    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
    <!-- Assuming $product is an associative array containing the existing product information -->
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name" value="<?php echo $product['name']; ?>" required>
    </div>

    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
    </div>
    <!-- Assuming you want to allow updating the image, remove the 'required' attribute -->

    <div class="form-group">
      <label for="description">Description:</label>
      <textarea class="form-control" id="description" name="description" rows="4" required><?php echo $product['description']; ?></textarea>
    </div>

    <!-- Include other form fields similarly, pre-populated with existing product information -->

    <div class="text-center">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>
