
<?php
$conn = new mysqli("localhost", "root", "", "krishibazar");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


