<div id="sidebar" class="bg-light">
    <div class="p-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <?php
                // Sample associative array with URLs and text
                $sidebarOptions = array(
                    'Home' => 'index.php',
                    'Products' => 'products.php',
                    'Settings' => 'settings.php',
                    'Sell' => 'sell.php'
                );

                // Loop through the array
                foreach ($sidebarOptions as $text => $url) {
                    ?>
                    <li class="breadcrumb-item"><a href="<?php echo $url; ?>"><?php echo $text; ?></a></li>
                    <?php
                }
                ?>
            </ol>
        </nav>
    </div>
</div>
