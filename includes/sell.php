<div class="container sell" id="sell" style = " margin-top:5%;box-shadow :2px 2px 9px 2px black; border-radius: 2%; padding:5%;">
  <h4 style  = "color:#f7d16e; background:green; padding:2%;"class = "text-center"> Sell products</h4>
  
  
  <form action="app/controllers/ProductController.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
    </div>

    <div class="form-group">
      <label for="description">Description:</label>
      <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
    </div>
    <div class="form-group">
      <label for="quantity">Quantity:</label>
      <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
    </div>
    <div class="form-group price-group">
      <label for="price">Price:</label>
      <input type="number" class="form-control" id="price" name="price" min="0" step="0.01" required>
    </div>
    <div class="form-group quantiy-unit" id = "quantity_unit_container">
      <label for="vendor_unit">unit:</label>
       <select class="form-control" name="quantity_unit" id="quantity_unit">
         <option value = "kg" id = "kg">kg</option>
         <option value = "gram">gram</option>
         <option value = "litre"  id = "litre">litre</option>

         <option value = "pieces" id = "piece">piece</option>
         

       </select>
     </div>
    
    <div class="form-group">
      <label for="producttype">Product Type:</label>
      <select class="form-control" id="product_type" name="product_type" required>
        <option value="vendor">Vendor</option>
        <option value="farmer">Farmer</option>
      </select>
    </div>
    <div class="form-group" id="farmer_category_group" style="display:none;">
      <label for="category">farmer product Category:</label>
      <select class="form-control" id="category" name="category">
        <option value="vegetable">vegetable</option>
        <option value="dairy">dairy</option>
        <option value="meat">meat</option>
        <option value="fish">fish</option>
        <option value="grains">grains</option>
        <option value="fruit">fruit</option>
        <option value="other">other</option>
      </select>
    </div>

    <div class="form-group" id="harvest_date_group" style="display: none;">
      <label for="harvest_date">Harvest Date:</label>
      <input type="date" class="form-control" id="harvest_date" name="harvest_date">
    </div>

    

    <div class="form-group" id="vendor_category_group" style="display: block;">
      <label for="category">vendor product Category:</label>
      <select class="form-control" id="category" name="category">
        <option value="seeds">seeds</option>
        <option value="fertilizer">fertilizer</option>
        <option value="pesticide">pesticide</option>
        <option value="Machine_spare_parts">Machine_spare_parts</option>
      </select>
    </div>

   

    <div class="text-center">
      <button name  = "sell" type="submit" class="btn  sell_it" style = "width:100%" confirm('You sure about that?');>sell it</button>
    </div>
  </form>
</div>
<div class="mt-4"></div>
<style>
  .form-group {
    
  }
  .form-group label{
    font-weight: bold;
    font-size: 1.2em;
  }
  .form-group{
    box-shadow:  1px 1px 4px 1px rgba(1, 1, 0.1, 0.1);
  }
  .sell_it{
    background:green;
    color:#f7d16e ;
    padding:2%;
    font-weight: bold;
    font-size: 1.2em;
    box-shadow:4px 3px 4px 3px rgba(1, 1, 0.3, 0.2);
  }
  
</style>
<script>
  document.getElementById("product_type").addEventListener("change", function() {
    var productType = this.value;
    var harvestDateGroup = document.getElementById("harvest_date_group");
    var farmerCategoryGroup = document.getElementById("farmer_category_group");
    var vendorCategoryGroup = document.getElementById("vendor_category_group");
    if (productType === "farmer") {
      harvestDateGroup.style.display = "block";
      farmerCategoryGroup.style.display = "block";
      vendorCategoryGroup.style.display = "none";
    } else if(productType ==="vendor") {
      harvestDateGroup.style.display = "none";
      farmerCategoryGroup.style.display = "none";
      vendorCategoryGroup.style.display = "block";
    }
  });


  
</script>
