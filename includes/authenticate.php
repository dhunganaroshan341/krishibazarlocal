
<!-- Add this single button to your HTML -->
<div class="container">
<h3 class = 'text-center' id  ="user_status">new user</h3> 
<button id="toggleButton" onclick="toggleForm()" class=" btn btn-danger btn-block" button id="toggleButton" onclick="toggleForm()" class="btn btn-danger">Signup</button>
<h3 class = 'text-center' id  ="user_status">or</h3> 
</div>

<!-- Your existing HTML for login and signup forms -->
<script>
    let isSignup = true; // Initial state is signup

    // Function to toggle between login and signup forms and update button text
    function toggleForm() {
        // Toggle the state
        isSignup = !isSignup;

        // Get the button and forms
        const button = document.getElementById('toggleButton');
        const signupForm = document.getElementById('signupFormContainer');
        const loginForm = document.getElementById('loginForm');
        var user_status=document.getElementById("user_status");
        user_status.innerText = isSignup ? 'Already Existing user' : 'new user';
        // Toggle the forms
        signupForm.style.display = isSignup ? 'block' : 'none';
        loginForm.style.display = isSignup ? 'none' : 'block';

        // Update button text
        button.innerText = isSignup ? 'Login' : 'Signup';

        // Change background color of button based on form displayed
        button.classList.toggle('btn-success', isSignup);
        button.classList.toggle('btn-danger', !isSignup);
    }

    // Show the signup form by default
    toggleForm();
</script>

<!-- signup login Form -->
<div class="container mt-5" id ="signupFormContainer" style="display: none;">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                <form id="signupForm" method="post" action="app/controllers/AuthController.php" onsubmit="addEmailQueryParam()" enctype="multipart/form-data">


                        <h2 class="text-center mb-4">Signup</h2>
                        <div class="form-group">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                            <label for="signupEmail">Email:</label>
                            <input type="email" class="form-control" id="signupEmail" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="signupPassword">Password:</label>
                            <input type="password" class="form-control" id="signupPassword" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password:</label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                                    <input type="file" class="form-control" id="image" name="image" accept=".png, .jpg, .jpeg" size="9042880">
                            </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
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
                        <button type="submit" name ="signup" class="btn btn-primary btn-block">Signup</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var passwordInput = document.getElementById('signupPassword');
        var confirmPasswordInput = document.getElementById('confirmPassword');
        var submitButton = document.getElementById('submitButton');

        // Function to validate password requirements
        function validatePassword(password) {
            // Add your password requirements here
            // For example, minimum length of 8 characters
            return password.length >= 8;
        }

        // Function to check if passwords match
        function passwordsMatch() {
            return passwordInput.value === confirmPasswordInput.value;
        }

        // Function to handle form submission
        function handleSubmit(event) {
            if (!passwordsMatch() || !validatePassword(passwordInput.value)) {
                // Prevent form submission
                event.preventDefault();
                // Display error message or take appropriate action
                alert('Passwords do not match or do not meet the minimum requirements.');
            }
        }

        // Add event listeners
        confirmPasswordInput.addEventListener('input', function() {
            // Check passwords on every input change in confirm password field
            if (passwordsMatch()) {
                // Enable submit button if passwords match
                submitButton.disabled = false;
            } else {
                // Disable submit button if passwords don't match
                submitButton.disabled = true;
            }
        });

        // Add submit event listener to form
        document.getElementById('signupForm').addEventListener('submit', handleSubmit);
    });
</script>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                <form id="loginForm" method="post" action="app/controllers/AuthController.php" ">
                        <h2 class="text-center mb-4">Login</h2>
                        <div class="form-group">
                            <label for="loginEmail">Email:</label>
                            <input type="email" class="form-control" id="loginEmail" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="loginPassword">Password:</label>
                            <input type="password" class="form-control" id="loginPassword" name="password" required>
                        </div> 
                        <label for="userType">Type:</label>
                            <select class="form-control" id="userType" name="userType">
                                <option value="farmer">Farmer</option>
                                <option value="vendor">Vendor</option>
                                <option value="user">User</option>
                            </select> 
                            
                            <label class="form-check-label" for="dropdownCheck">
                                Remember me </label><input type="checkbox" class="form-check-input" id="dropdownCheck">
                        <input type="submit" name = "login" class="mt-4 btn btn-success btn-block" value = "login">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





<!-- <script>
    function addEmailQueryParam() {
        var email = document.getElementById("loginEmail").value;
        // Get the form action
        var formAction = document.getElementById("loginForm").action;
        // Append the email as a query parameter
        document.getElementById("loginForm").action = formAction + "?loginEmail=" + encodeURIComponent(email);
    }
</script> -->

<!-- Add these buttons to your HTML -->

<!-- Your existing HTML for login and signup forms -->

<!-- <script>
    document.getElementById('userType').addEventListener('change', function () {
        var coreProductInput = document.getElementById('coreProductInput');
        if (this.value === 'farmer' || this.value === 'vendor') {
            coreProductInput.style.display = 'block';
        } else {
            coreProductInput.style.display = 'none';
        }
    });
</script> -->

<!-- <table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>name</th>
            <th>email</th>
            <th>password</th>
            <th>address</th>
            
        </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
</table> -->

<?php
    // // authenticate.php

    // // Check if the form submission is from the login form
    // if (isset($_POST['loginEmail']) && isset($_POST['loginPassword'])) {
    //     // Redirect to login function in AuthController
    //     header("Location: AuthController?login");
    //     exit();
    // }

    // // Check if the form submission is from the signup form
    // if (isset($_POST['signupEmail']) && isset($_POST['signupPassword']) && isset($_POST['name'])) {
    //     // Redirect to signup function in AuthController
    //     header("Location: AuthController?signup");
    //     exit();
    // }

// If neither login nor signup form data is present, redirect to a generic error page or handle accordingly

?>