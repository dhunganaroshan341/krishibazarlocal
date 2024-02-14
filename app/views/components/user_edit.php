
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8"> <!-- Increase col size for wider card on larger screens -->
            <div class="card shadow-lg"> <!-- Add shadow for aesthetic effect -->
                <div class="card-body">
                    <form id="editForm" method="post" action="app/controllers/AuthController.php" onsubmit="addEmailQueryParam()" enctype="multipart/form-data">
                    <h2 class="text-center mb-4">Edit Profile</h2>

                        <div class="form-group">
                         <div class="form-group">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text"  value=" <?php  echo $user_name?$user_name:'';?>"class="form-control" id="name" name="name" required>
                        </div>
                      
                            <label for="editEmail">Email:</label>
                            <input  value=" <?php  echo $user_email?$user_email:'';?>" type="email" class="form-control" id="editEmail" name="email" disabled >
                        </div>
                        <div class="form-group" id = "password" >
                            <label for="editPassword">Password:</label>
                            <input  onclick="toggleFunction()" value=" <?php  echo $user_password?$user_password:'';?>" type="password" class="form-control" id="editPassword" name="password" required>
                        </div>
                        <div class="form-group" id = "confirmPassword" style = "display:none">
                            <label for="confirmPassword">Confirm Password:</label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                                    <input type="file" class="form-control" id="image" name="image" accept=".png, .jpg, .jpeg" size="9042880">
                            </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input  value=" <?php  echo $user_address?$user_address:'';?>" type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input  value=" <?php  echo $user_phone?$user_phone:'';?>"type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="userType">Type:</label>
                            <select class="form-control" id="userType" name="userType">

                                <option value="farmer">Farmer</option>
                                <option value="vendor">Vendor</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                        <div id="coreProductInput" style="display: none;" class="form-group">
                            <label for="coreProduct">Core Product:</label>
                            <input type="text" class="form-control" id="coreProduct" name="coreProduct">
                        </div>
                        <button onclick = "confirmEdit()" type="submit" name ="user_edit" class="btn  custom-primary-button btn-block">Edit</button>
                       
                    </form>
                    <button onclick="confirmCancel()" class="btn btn-danger btn-block">Cancel</button>



                </div>
            </div>
        </div>
    </div>
</div>
<div class="mt-4"></div>
<script>
    function confirmCancel() {
        if (confirm("Are you sure you want to cancel?")) {
            window.location.href = "user_profile.php";
        }
    }

    
    function toggleFunction() {
    var pass = document.getElementById('password');
    var cPass = document.getElementById('confirmPassword');
    cPass.style.display = cPass.style.display === 'none' ? 'block' : 'none';
}

    
function confirmEdit() {
    // Display a confirmation dialog
    var userConfirmed = confirm("sure Edit?");

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
<style>
    .custom-primary-button{
    
    background-color:#f7d16e ;

}
</style>