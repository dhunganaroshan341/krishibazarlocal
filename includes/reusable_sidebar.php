


<style>
body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        #sidebar {
            position: fixed;
            left: -250px;
            width: 250px;
            height: 100vh;
            background: linear-gradient(327deg, #c4ed73, #392d2b);
            transition: left 0.3s;
            overflow-y: auto;
            padding-top: 20px;
        }

        #sidebar.show {
            left: 0;
        }

        #sidebar .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            color: white;
            font-size: 24px;
        }

        #sidebar a {
            display: block;
            padding: 10px 20px;
            color: white;
            text-decoration: none;
            transition: background 0.3s;
        }

        #sidebar a:hover {
            background: rgba(0, 0, 0, 0.1);
        }

        .content {
            margin-left: 900px;
            margin-bottom: 20px;
            transition: margin-left 0.3s;
            padding: 20px;
        }

        /* Media query for smaller screens */
        @media (max-width: 768px) {
            #sidebar {
                left: -250px;
            }

            #sidebar.show {
                left: 0;
            }

            .content {
                margin-left: 0;
            }
            .navbar-toggler{
               
                
            }
        }
    </style>

<div id="sidebar">
    <div class="close-btn" onclick="toggleSidebar()"><i class="fas fa-times"></i></div>
    <?php
         echo isset($_SESSION['user_name']) ? '<a style = "margin:4px" class = "py-2 m" href="user_profile.php">' . $_SESSION['user_name'] . '<i class="fas fa-user"></i></a>' : ''; ?>


    <?php
    $i = 0;
   
    foreach ($sidebarOptions as $option => $url) {
        $i++;
        if ($i == 1) {
            echo '<a href="' . $url . '" class="active">' . $option . '</a>';
        } else {
            echo '<a href="' . $url . '">' . $option . '</a>';
        }
    }
    ?>
</div>

<div class="content">
    <button class="navbar-toggler" onclick="toggleSidebar()"><i class=" m-2 fas fa-bars"></i><?php  echo $title;?></button>
    <!-- Content goes here -->
</div>

<script>
    function toggleSidebar() {
        var sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('show');
    }
</script>