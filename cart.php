<?php
$title = "sell your products";
include_once __DIR__."/includes/header.php";?>
</head>
<body>
<?php 
 $sidebarOptions = array(
    "home" => "index.php",
    "products" => "products.php",
    "sell" => "sell.php"
);
 
include_once __DIR__.'/includes/reusable_sidebar.php';

include_once __DIR__.'/includes/buycart/product_detail_card.php'; ?>


<?php
include_once __DIR__.'/includes/footer.php'; ?>
