<?php
include_once __DIR__."/start_session.php";

$title = "cart";
include_once __DIR__."/includes/header.php";
include_once __DIR__."/config/database.php";?>

</head>
<body>
<?php 
 $sidebarOptions = array(
    "home" => "index.php",
    "products" => "products.php",
    "sell" => "sell.php"
);

include_once __DIR__.'/includes/reusable_sidebar.php';
?>
<?php
include_once __DIR__.'/includes/buycart/product_detail_card.php'; ?>

<?php
include_once __DIR__.'/includes/footer.php'; ?>
