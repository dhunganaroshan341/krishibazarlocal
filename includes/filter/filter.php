
<?php
include_once __DIR__ . "/../../config/database.php";

$product_query = "SELECT * FROM product_sale";
$result = mysqli_query($conn, $product_query);

$products = array(); // Initialize an empty array to store the fetched products

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
    // Loop through each row of data
    while ($row = mysqli_fetch_assoc($result)) {
        // Store each row as an element in the $products array
        $products[] = $row;
    }
} else {
    // If no products are found
    echo "No products found.";
}

// Output initial products
echo '<script>var products = ' . json_encode($products) . ';</script>';
?>
<div class="filter-container">
    <label for="category-filter">Filter by Category:</label>
    <select id="category-filter" onchange="filterProducts()">
        <option value="">All</option>
        <!-- Add options dynamically from PHP if needed -->
    </select>

    <label for="price-filter">Filter by Price:</label>
    <select id="price-filter" onchange="filterProducts()">
        <option value="">All</option>
        <option value="0-10">0-10</option>
        <option value="10-20">10-20</option>
        <!-- Add more price ranges if needed -->
    </select>

    <label for="search">Search:</label>
    <input type="text" id="search" oninput="filterProducts()" placeholder="Search by name">

    <button onclick="clearFilters()">Clear Filters</button>
</div>
<?php
// Include product cards
foreach ($products as $product) :
    include __DIR__."/../../app/views/components/product_card.php"; // Pass each selected product to the product_card.php component
endforeach;
?>




<div class="grid-container container-fluid mt-4" id="product-grid">
    <!-- Product cards will be dynamically added here -->
</div>
<script>
    function filterProducts() {
    // Get filter values
    var category = document.getElementById("category-filter").value;
    var priceRange = document.getElementById("price-filter").value;
    var searchTerm = document.getElementById("search").value.toLowerCase();

    // Filter products based on category
    var filteredProducts = products.filter(function(product) {
        return (category === "" || product.category === category) &&
               (priceRange === "" || checkPriceInRange(product.price, priceRange)) &&
               (searchTerm === "" || product.name.toLowerCase().includes(searchTerm));
    });

    // Update the product grid with filtered products
    displayProducts(filteredProducts);
}

function checkPriceInRange(price, range) {
    var minMax = range.split("-");
    var min = parseFloat(minMax[0]);
    var max = parseFloat(minMax[1]);
    return price >= min && price <= max;
}

function clearFilters() {
    // Reset filter options and display all products
    document.getElementById("category-filter").value = "";
    document.getElementById("price-filter").value = "";
    document.getElementById("search").value = "";
    filterProducts();
}

</script>