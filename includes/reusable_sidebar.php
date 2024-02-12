 <style>
    #sidebar {
                        width: 250px;
                        background-color: #f4f4f4;
            /* Ensure sidebar is above other content */
        }

        #sidebar.show {
            left: 0; /* Show sidebar */
        }

        #sidebar a {
            display: block;
            padding: 8px;
            text-decoration: none;
            color: #333;
        }

        #sidebar a:hover {
            background: orange;
            opacity: .9;
            color: white;
        }

        /* Media query for mobile devices */
        @media (max-width: 768px) {
            #sidebar {
                width: 100%; /* Take up full width */
                left: -100%; /* Initially hidden */
            }

            #sidebar.show {
                left: 0; /* Show sidebar */
            }
        }
    
</style>

<!-- <div id="sidebar" class="sidebar-open">
    <button id="toggle-sidebar-btn" onclick="toggleSidebar()">Toggle Sidebar</button> -->
    <?php
    // $i = 0;
    // foreach ($sidebarOptions as $option => $url) {
    //     $i++;
    //     if ($i == 1) {
    //         echo '<a href="' . $url . '" class="active">' . $option . '</a>';
    //     } else {
    //         echo '<a href="' . $url . '">' . $option . '</a>';
    //     }

    // }
    ?>
<!-- </div> -->

<script>
    // function toggleSidebar() {
    //     var sidebar = document.getElementById('sidebar');
    //     sidebar.classList.toggle('sidebar-open');
    // }

</script> 
<section class="sidebarContainer container">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
        sidebar-menu
    </button>

<div id="sidebar">
        <div class="p-4">
            <?php
            $i = 0;
            foreach ($sidebarOptions as $option => $url) {
                $i++;
                if ($i == 1) {
                    echo '<a href="' . $url . '" class="d-block py-2 active">' . $option . '</a>';
                } else {
                    echo '<a href="' . $url . '" class="d-block py-2">' . $option . '</a>';
                }
            }
            ?>
        </div>
    </div>
    </section>
