<?php
include_once __DIR__."/start_session.php";
$title = "settings";

?>
 <?php
// Check if user is not logged in
if(!isset($_SESSION['user_name'])) {
    // Include authentication file
    include_once __DIR__."/includes/authenticate.php";

} else {
    // User is logged in, continue with other logic
    
}
?>

<?php
include_once __DIR__."/includes/header.php";?>
</head>
  <body>
<?php
  if(isset($_SESSION['user_name'])) {
    // User is logged in, show welcome message
    echo "Hello, " . $_SESSION['user_name'] . "!";?>
  <form action="app/controllers/LoginController.php" method="post">
  <div class="form-group">
    <label for="Logout ">Logout </label>
    <button type="submit" name="logout" id="toggleButton" onclick="" class="btn btn-danger mb-3" style="width: 10%;">logout</button>
  </div>
  </form>
  <?php
  $title = $user_name . "'s". "profile";
    include_once __DIR__."/app/views/components/user_profile.php";
  ?>
  <script src="pubilc/js/getUrlParameter.js"></script>
  <script>
    function confirmAction() {
    // Display a confirmation dialog
    var userConfirmed = confirm("Are you sure you want to proceed?");

    // Check the user's choice
    if (userConfirmed) {
        console.log("Confirmed");
        // You can perform the action here after confirmation
    } else {
        console.log("Canceled");
        // You can handle the cancellation or perform an action if canceled
    }
}

  </script>
<?php
} ?>
    <!-- Your content here -->
 <div class = "mt-5"></div>
    <?php 
    include_once __DIR__. "/includes/navbar.php";
    include_once __DIR__."/includes/footer.php"; ?>

    <!-- Bootstrap JS (optional) -->
   

