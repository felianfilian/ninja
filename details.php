<?php

include('./config/db_connect.php');

// check get request
if(isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // make sql
    $sql = "SELECT * FROM pizzas WHERE id = $id";

    // get query result
    $result = mysqli_query($conn, $sql);

    // fetch result in array format
    $pizza = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);

    print_r($pizza);
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