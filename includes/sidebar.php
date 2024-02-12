<div id="sidebar">
    <?php
    // Loop through the array to create buttons and corresponding event listeners
    foreach ($sidebarOptions as $option => $id) {
        echo '<button onclick="toggleElement(\'' . $id . '\')">' . $option . '</button>';
    }
    ?>
</div>
<style>
    
</style>
<script>
function toggleElement(id) {
    var element = document.getElementById(id);
    if (element.style.display === "none") {
        element.style.display = "block";
    } else {
        element.style.display = "none";
    }
}
</script>