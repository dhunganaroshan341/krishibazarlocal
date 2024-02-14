<?php
include_once __DIR__."/start_session.php";
$title ="edit";

include_once __DIR__."/includes/header.php";
$title = "edit ".$user_name."'s"." profile";
?>
</head>
<body>
    <?php
        include_once __DIR__."/app/views/components/user_edit.php";
    ?>
<?php
include_once __DIR__."/includes/footer.php";
?>
