


<form action="process_sell.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Image:</label>
        <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description:</label>
        <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
    </div>

    <div class="mb-3">
        <label for="category" class="form-label">Category:</label>
        <input type="text" class="form-control" id="category" name="category" required>
    </div>

    <div class="mb-3">
        <label for="quantity" class="form-label">Quantity:</label>
        <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
    </div>

    <div class="mb-3">
        <label for="base_price" class="form-label">Base Price:</label>
        <input type="number" class="form-control" id="base_price" name="base_price" min="0" step="0.01" required>
    </div>

    <div class="mb-3">
        <label for="producttype" class="form-label">Product Type:</label>
        <select class="form-select" id="producttype" name="producttype" required>
            <option value="">Select Product Type</option>
            <option value="farmer">Farmer</option>
            <option value="vendor">Vendor</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price:</label>
        <input type="number" class="form-control" id="price" name="price" min="0" step="0.01" required>
    </div>

    <div class="mb-3">
        <label for="harvest_date" class="form-label">Harvest Date:</label>
        <input type="date" class="form-control" id="harvest_date" name="harvest_date" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>