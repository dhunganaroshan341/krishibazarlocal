  <?php

  ?>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
            }

            .profile-container {
                max-width: 600px;
                margin: 0 auto;
            }

            .profile-header {
                text-align: center;
                margin-bottom: 20px;
            }

            .profile-details {
                border: 1px solid #ccc;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .profile-details div {
                margin-bottom: 15px;
            }

            .profile-details label {
                font-weight: bold;
            }

            .profile-image {
                max-width: 100%;
                height: auto;
                border-radius: 50%;
            }
        </style>
    

    <div class="profile-container">
    <div class="profile-header">
        <h1><?php echo $title ?></h1>
    </div>

    <div class="profile-details product-card-custom">
        <div style="width: 20%; height: 30%; margin-top: 2%; margin-bottom: 20px;">
            <img src="<?php echo $user_image != null ? $user_image : '/public/images/users/user_default_image.jpg'; ?>" alt="Profile Picture" class="profile-image">
        </div>

        <div>
            <label for="name">Name:</label>
            <span id="name"><?php echo $user_name; ?></span>
        </div>
        <div>
            <label for="address">Address:</label>
            <span id="address"><?php echo $user_address; ?></span>
        </div>
        <div>
            <label for="contact">Contact:</label>
            <span id="contact"><?php echo $user_phone; ?></span>
        </div>
        <div>
            <label for="contact">Email:</label>
            <span id="contact"><?php echo $user_email; ?></span>
        </div>
        <div>
            <form action="user_edit.php" method="post">
                <button class="btn custom-primary-button" name="edit_user" type="submit">Edit Profile</button>
            </form>
        </div>
    </div>
</div>
<div class="mt-4"></div>

        

   
