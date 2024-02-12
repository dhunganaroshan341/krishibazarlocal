<!-- includes/navbar.php -->    
<style>
    .agricultural-navbar {
        background-color: #8FBC8F; /* Olive Drab - You can choose a color that suits your theme */
        padding: 10px;
    }

    .agricultural-navbar ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: space-around;
    }

    .agricultural-navbar li {
        display: inline;
    }

    .agricultural-navbar a {
        text-decoration: none;
        color: #FFF; /* White text for contrast */
    }

    .agricultural-navbar i {
        margin-right: 5px;
    }

    .menu-toggle {
        display: none; /* Initially hide the hamburger menu on larger screens */
        cursor: pointer;
    }

    /* Responsive Styles for Mobile */
    @media only screen and (max-width: 600px) {
        .menu-toggle {
            display: block; /* Show the hamburger menu on smaller screens */
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 1.5em;
        }

        .agricultural-navbar ul {
            display: flex; /* Hide the navigation links by default */
            flex-direction: column;
            align-items: center;
        }

        .agricultural-navbar ul.show {
            display: flex; /* Show the navigation links when the menu is clicked */
        }
    }
    .agricultural-navbar li:hover{
        background:orange;
        transition:0.5s;
        width:auto;
        
        
    }
</style>

<?php
$navbarItems = array(
    'Krishibazar' => 'index.php',
    'product' => 'products.php',
    'settings' => 'settings.php',
    'sell' => 'sell.php'
);
$icon = array(
    'fa-home',
    'fa-shopping-cart',
    'fa-cog',
    ' fa-pencil-alt'
    
)
?>
<nav class="agricultural-navbar">
    <div class="menu-toggle" id="mobile-menu" onclick="toggleMenu()">
        <i class="fas fa-bars"></i>
    </div>
    <ul class="nav-list" id="nav-list">
        <?php
        $i = 0;
        foreach ($navbarItems as $text => $link) {
            echo "<li><a href='$link' title='$text'><i class='fas $icon[$i]'></i> $text</a></li>"; 
            $i++;
        }
        echo isset($_SESSION['user_name']) ? '<li>' . $_SESSION['user_name'] . '<i class="fas fa-user"></i></li>' : ''; 
        ?>
    </ul>
</nav>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-0p/xfR8i4ZUVJQBCa3ukExxF7GymBxm8+Gg3BU1/cg99cPzhEHBbpTGoLlMz8BxK8pX2jCzGz9Vb3hGqBzEXZw==" crossorigin="anonymous"></script>

<script>
    function toggleMenu() {
        var navList = document.getElementById('nav-list');
        navList.classList.toggle('show');
    }
</script>
