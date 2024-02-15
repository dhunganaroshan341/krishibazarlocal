<?php
// Start the session
include_once __DIR__ . "/../start_session.php";

include_once __DIR__ . "/../config/database.php";

$user_id = $_SESSION['user_id'];
$seller_id = $_SESSION['user_id']; // Assuming you have the seller's ID in the session
$query = "SELECT * FROM product_sale WHERE seller_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $seller_id); // 'i' indicates integer type
$stmt->execute();
$result = $stmt->get_result();
$sellings = $result->fetch_all(MYSQLI_ASSOC);
?>


<div class="container mt-4" id="seller_table">
  <h2>Recent Sellings</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th style="border-left:1px solid black">S.N.</th>
        <th>Name</th>
        <th>Category</th>
        <th>seller name</th>
        <th>Quantity</th>
        <th>Price per Unit</th>
        <th>Total Price</th>
        <th>Actions</th>
        <th style="border-right:1px solid black">status</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 0;
      foreach ($sellings as $selling): ?>
        <tr>
          <td style="border-left:1px solid black"><?php echo ++$i ?></td>
          <td><?php echo $selling['name']; ?></td>
          <td><?php echo $selling['category']; ?></td>
          <td><?php echo $_SESSION['user_name']; ?></td>
          <td><?php echo $selling['quantity'] . " " . $selling['quantity_unit']; ?></td>
          <td><?php echo $selling['price']; ?></td>
          <td><?php echo $selling['price'] * $selling['quantity'] ?></td>
          <td id="actionTD">
            <?php if ($selling['status'] === 'pending'): ?>
              <button name="sell_product" onclick="sellFunction(<?php echo $selling['id']; ?>)" class="btn mt-2 btn-success">Sell</button>
              <button name="cancel_buy_request" onclick="cancelFunction(<?php echo $selling['id']; ?>, <?php echo $seller_id; ?>, <?php echo $user_id; ?>)" class="btn mt-2 btn-warning">Cancel buy request</button>
            <?php elseif ($selling['status'] === 'available'): ?>
              <button name="delete_product" onclick="deleteFunction(<?php echo $selling['id']; ?>)" class="btn btn-danger">Delete product</button>
            <?php endif; ?>
          </td>
          <td><?php echo $selling['status']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<script>
  function sellFunction(product_id) {
    if (confirm("Are you sure you want to sell?")) {
      var url = 'app/controllers/sell_product.php?product_id=' + product_id;
      window.location.href = url;
    }
  }

  function cancelFunction(product_id, seller_id, sold_id) {
    if (confirm("Are you sure you want to cancel?")) {
      var url = 'app/controllers/cancel_product_sell.php?product_id=' + product_id + '&seller_id=' + seller_id + '&sold_id=' + sold_id;
      window.location.href = url;
    }
  }
</script>
