<div class="grid-container container-fluid mt-4">  
    <style>
        .grid-container {
            display: grid;
            justify-content: center; /* Center the grid horizontally */
            align-items: center;
            gap: 20px;
            width: 100%; /* Set width to 100% to fill the screen */
            padding: 20px; /* Optional: add padding */
        }
    </style>
    <?php
    $randomProducts =[ ['image' => 'wheat.jpg', 'name' => 'गहु', 'price' => 1.99, 'quantity' => 1000, 'seller' => 'किसान सहकारी'],
    ['image' => 'corn.jpg', 'name' => 'मकै', 'price' => 2.49, 'quantity' => 800, 'seller' => 'हरियो खेत कृषि'],
    ['image' => 'milk.jpg', 'name' => 'ताजा दूध', 'price' => 0.99, 'quantity' => 500, 'seller' => 'डेयरी डिलाइट्स'],
    ['image' => 'chicken.jpg', 'name' => 'स्वतन्त्र मुर्गा', 'price' => 5.99, 'quantity' => 200, 'seller' => 'ह्यापी हेन्स फार्म'],
    ['image' => 'tomatoes.jpg', 'name' => 'टमाटर', 'price' => 3.99, 'quantity' => 700, 'seller' => 'सनराइज फार्म्स'],
    ['image' => 'eggs.jpg', 'name' => 'जिवाणुमुक्त अंडा', 'price' => 1.49, 'quantity' => 1000, 'seller' => 'एग्सेलेन्ट फार्म्स'],
    ['image' => 'fish.jpg', 'name' => 'ताजा माछा', 'price' => 7.99, 'quantity' => 300, 'seller' => 'ओशन हार्वेस्ट'],
    ['image' => 'apples.jpg', 'name' => 'स्याउ', 'price' => 2.99, 'quantity' => 600, 'seller' => 'आर्चर्ड फ्रेश'],
    ['image' => 'honey.jpg', 'name' => 'शुद्ध मह', 'price' => 4.99, 'quantity' => 400, 'seller' => 'मधुमेहको भण्डार'],
    ['image' => 'potatoes.jpg', 'name' => 'आलु', 'price' => 1.79, 'quantity' => 800, 'seller' => 'गोल्डन स्पड्स फार्म'],
    
        ['image' => 'wheat.jpg', 'name' => 'Wheat', 'price' => 1.99, 'quantity' => 1000, 'seller' => 'Farmers Co-op'],
        ['image' => 'corn.jpg', 'name' => 'Corn', 'price' => 2.49, 'quantity' => 800, 'seller' => 'Green Fields Farm'],
        ['image' => 'milk.jpg', 'name' => 'Fresh Milk', 'price' => 0.99, 'quantity' => 500, 'seller' => 'Dairy Delights'],
        ['image' => 'chicken.jpg', 'name' => 'Free-Range Chicken', 'price' => 5.99, 'quantity' => 200, 'seller' => 'Happy Hens Farm'],
        ['image' => 'tomatoes.jpg', 'name' => 'Tomatoes', 'price' => 3.99, 'quantity' => 700, 'seller' => 'Sunrise Farms'],
        ['image' => 'eggs.jpg', 'name' => 'Organic Eggs', 'price' => 1.49, 'quantity' => 1000, 'seller' => 'Eggcellent Farms'],
        ['image' => 'fish.jpg', 'name' => 'Fresh Fish', 'price' => 7.99, 'quantity' => 300, 'seller' => 'Ocean Harvest'],
        ['image' => 'apples.jpg', 'name' => 'Apples', 'price' => 2.99, 'quantity' => 600, 'seller' => 'Orchard Fresh'],
        ['image' => 'honey.jpg', 'name' => 'Pure Honey', 'price' => 4.99, 'quantity' => 400, 'seller' => 'Beekeeper', ' Bounty'],
        ['image' => 'potatoes.jpg', 'name' => 'Potatoes', 'price' => 1.79, 'quantity' => 800, 'seller' => 'Golden Spuds Farm'],
        ['image' => 'beef.jpg', 'name' => 'Grass-Fed Beef', 'price' => 8.99, 'quantity' => 150, 'seller' => 'Pasture Prime Ranch'],
        ['image' => 'carrots.jpg', 'name' => 'Carrots', 'price' => 1.29, 'quantity' => 700, 'seller' => 'Carrot Kingdom'],
    ];
    foreach ($randomProducts as $product) :
        include __DIR__."/../app/views/components/product_card.php";
    endforeach;
    ?>
</div>
