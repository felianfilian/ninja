<?php

include('./config/db_connect.php');

// check get request
if(isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // make sql
    $sql = "SELECT * FROM pizzas WHERE id = $id";

    // get query result
    
}

?>

<html>
<?php include('templates/header.php');  ?>

<body class="grey lighten-4">
    <?php include('templates/navbar.php');  ?>
    
    <h2>Details</h2>

    <?php include('templates/footer.php');  ?>
</body>
</html>