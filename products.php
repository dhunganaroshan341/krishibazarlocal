<?php
$title = "products";
 include_once __DIR__."/includes/header.php";
 ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-fMIJ8B8MU4a08W6A+07GQJDpAWJ8z+OHx1ZaAzGu0gPO8DdvBh1wsN5xRsOK1yxQ4/uU/8+I+h5VrCOTFfx/4A==" crossorigin="anonymous" />
<link rel="stylesheet" href="public/css/navabar.css">
 <?php


$sidebarOptions = array(
   "products"=>"products.php",
   "categories" => "#categories",
   "recent" => "#recent",
   "other" => "#sell",
   "filter" => "filter_products.php",
   "krishibazar"=> "index.php",
);

 ?>
 

 <section class="tophalf mt-4" style="position: sticky; top: 20%;">
 <h1 class="display-1"> Products page</h1>  
 <?php
    include_once __DIR__."/includes/reusable_sidebar.php";
    

 ?> 

 </section>
<div class="mt-4"></div>
<div class="mt-4"></div>
<div class="mt-4"></div>
 <?php
 include_once __DIR__."/includes/products_display.php";
//  
 ?>
 <div class="mt-4"></div>
 
 <?php
 include_once __DIR__."/includes/crousels.php";
 include_once __DIR__."/includes/navbar.php";
 include_once __DIR__."/includes/footer.php";
 
 
 ?>