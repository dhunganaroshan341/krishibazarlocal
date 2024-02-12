<style>
    p{
        color:white;
        font-size: large;
        text-align: center;
    }
    .child-card{
        background:rebeccapurple;

    }
    .container-center{
        align-items: center;
    }
</style>
<section id="categories">
    <h3>categories</h3>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php
        // Split the products array into chunks of 3 items each
        $chunks = array_chunk($products, 3);
        
        // Loop through each chunk of products
        foreach ($chunks as $index => $chunk) {
            // Determine active class for carousel item
            $activeClass = $index === 0 ? 'active' : '';
        ?>
            <div class="carousel-item <?php echo $activeClass; ?>">
                <div class="row">
                    <?php
                    // Loop through products in the current chunk
                    foreach ($chunk as $product) {
                    ?>
                        <div class="col-md-4">
                            <div class="card mb-4 child-card">
                                <div class="card-body">
                                    <h5 class="card-title text-white text-center"><?php echo $product['name']; ?></h5>
                                    <div class="image">
                                        <img src="<?php echo $product['image']; ?>" alt="product-image">
                                    </div>
                                    <p class="card-text">रू <?php echo $product['price']; ?>/unit</p>
                                    <p class="card-text">Quantity: <?php echo $product['quantity'] . $product['quantity_unit']; ?></p>
                                    <p class="card-text">Sold by: <?php echo $product['seller_id']; ?></p>
                                    <p class="card-text">Bought by: <?php echo $product['sold_id']; ?></p>
                                    <p class="card-text">Category: <?php echo $product['category']; ?></p>
                                    <div class="product-buttons container-center">
                                        <button type="button" class="btn btn-primary" onclick="addToCart()">Add to Cart</button>
                                        <button type="button" class="btn btn-success" onclick="buyNow()">Buy Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

    <!-- Navigation buttons -->
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
    </section>
