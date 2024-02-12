<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <?php
    // Sample associative array with ids and text
    $items = array(
        'item1' => 'Action',
        'item2' => 'Another action',
        'item3' => 'Something else here'
    );

    // Loop through the array
    foreach ($items as $id => $text) {
        ?>
        <a class="dropdown-item" href="#<?php echo $id; ?>"><?php echo $text; ?></a>
        <?php
    }
    ?>
  </div>
</div>
