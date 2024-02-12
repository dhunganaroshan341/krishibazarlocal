<?php

// Function to generate a random 4-digit PIN
// function generatePIN() {
//     return str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);
// }

// // Array to store generated PINs
// $pins = [];

// // Generate 10,000 unique PINs
// for ($i = 0; $i < 10000; $i++) {
//     $pin = generatePIN();
//     // Ensure uniqueness of PIN
//     while (in_array($pin, $pins)) {
//         $pin = generatePIN();
//     }
//     $pins[] = $pin;
// }

// // Output the generated PINs
// foreach ($pins as $pin) {
//     echo $pin . PHP_EOL;
// }

// include_once __DIR__."/app/models/UserModel.php";
// $getuser = new GetUser("Roshan","Roshan@123");
include_once __DIR__."/includes/header.php";
include_once __DIR__."/includes/crousels.php";
include_once __DIR__."/includes/footer.php";