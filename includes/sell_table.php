<?php
// Check if the session has not been started yet
if (session_status() === PHP_SESSION_NONE) {
  // Start the session
  session_start();
}

// Now you can continue with your logic



include_once __DIR__. "/../config/database.php";
$user_id = 5;
$_SESSION['user_id'] = $user_id;
$seller_id = $_SESSION['user_id']; // Assuming you have the seller's ID in the session
$query = "SELECT * FROM product_sale WHERE seller_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $seller_id); // 'i' indicates integer type
$stmt->execute();
$result = $stmt->get_result();
$sellings = $result->fetch_all(MYSQLI_ASSOC);
?>


<div class="container mt-4"  id = "seller_table"  >
  <h2>Recent Sellings</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th style = "border-left:1px solid black">S.N.</th>
        <th>Name</th>
        <th>Category</th>
        <th>seller id</th>
        <th>Quantity</th>
        <th>Price per Unit</th>
        <th>Total Price</th>
        <th>Actions</th>
        <th style = "border-right:1px solid black">status</th>
      </tr>
    </thead>
    <tbody><?php
        $i =0;
    ?>
    
      <?php foreach ($sellings as $selling): ?>
        <tr>
        <style>
  td {
    border-right: 1px solid black;
  }
  th {
    border-right: 1px solid black;
  }
</style>

        <td style = "border-left:1px solid black"><?php echo ++$i ?></td>
          <td><?php echo $selling['name']; ?></td>
          <td><?php echo $selling['category']; ?></td>
          <td><?php echo $selling['seller_id']; ?></td>
          <td><?php echo $selling['quantity']  . " " . $selling['quantity_unit']; ?></td>
          <td><?php echo $selling['price']; ?></td>
          <td><?php echo $selling['price']*$selling['quantity']?></td>
          <td><a href="#single_detail" class="btn btn-primary">Actions</a></td>
          <td><?php echo $selling['status']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
