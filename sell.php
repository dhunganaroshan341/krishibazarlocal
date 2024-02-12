
<?php
$title = "sell products";
include_once __DIR__."/includes/header.php";?>
</head>
<body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
<?php 
 $sidebarOptions = array(
    "sell" => "#sell",
    "sell_table" => "#sell_table",
    "more" => "sell"
);
?>
<style>
    
</style>

<?php
include_once __DIR__."/includes/reusable_sidebar.php";

 include_once  __DIR__. "/includes/sell_table.php";
 include_once  __DIR__. "/includes/sell.php";
 

 include_once  __DIR__. "/includes/navbar.php";

?>
<!-- <script>
    // Corrected code
    function toggleSellOptions() {
        var sellOptions = document.getElementById('seller_table');
        var sellOptions = document.getElementById('your_options');
        if (sellOptions.style.display === 'none') {
            sellOptions.style.display = 'block';
        } else {
            sellOptions.style.display = 'none';
        }
    }
    function toggle(){
        var sellOptions = document.getElementById('seller_table');
        var sellOptions = document.getElementById('your_options');


    }
</script> -->

<?php
 include_once __DIR__."/includes/footer.php";?>