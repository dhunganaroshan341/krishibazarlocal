<?php
$title = "user profile";


include_once __DIR__."/start_session.php";
$title = $_SESSION['user_name']. "'s Profile"; 
include_once __DIR__."/includes/header.php";?>
<link rel="stylesheet" href= 'public/css/card.css'>
</head>
<body>
    
<?php
include_once __DIR__."/app/views/components/user_profile.php";
include_once __DIR__."/includes/navbar.php";
include_once __DIR__."/includes/footer.php";
