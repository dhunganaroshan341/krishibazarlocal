<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
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
</head>
<body>

    <div class="profile-container">
        <div class="profile-header">
            <h1>User Profile</h1>
        </div>

        <div class="profile-details">
            <div>
                <img src="profile-picture.jpg" alt="Profile Picture" class="profile-image">
            </div>
            <div>
                <label for="name">Name:</label>
                <span id="name">John Doe</span>
            </div>
            <div>
                <label for="address">Address:</label>
                <span id="address">123 Main Street, Cityville</span>
            </div>
            <div>
                <label for="contact">Contact:</label>
                <span id="contact">+1 123-456-7890</span>
            </div>
            <!-- Add more details as needed -->
        </div>
    </div>

</body>
</html>
