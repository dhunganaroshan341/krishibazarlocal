<?php
    include_once __DIR__."/../../config/dbconfig.php";
    $product_id = $_GET['product_id'];
    $seller_id = $_GET['seller_id'];
    $sold_id = $_GET['sold_id'];
    $product_id = $_GET['product_id']; 
    $update_query = "UPDATE product_sale SET sold_id  = $sold_id  , status = 'pending'  WHERE id=$product_id"; 
    $updateresult =  mysqli_query($conn, $update_query); 

?>