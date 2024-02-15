<?php
echo isset($_SESSION['user_name']) ? '<li><a href="user_profile.php">' . $_SESSION['user_name'] . '<i class="fas fa-user"></i></a></li>' : '';?>