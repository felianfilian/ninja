<?php

$conn = mysqli_connect('localhost', 'mario', 'avalon', 'ninja_pizza');

if(!$conn) {
    echo "connection error";
}

// write query for all
$sql = 'SELECT title, ingredients, id FROM pizzas';
// make query and get result
$result = mysqli_query($conn, $sql);
// fetch resulting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory
mysqli_free_result($result);
// close connection
mysqli_close($conn);

print_r($pizzas);

?>

<html>
<?php include('templates/header.php');  ?>

<style>
    form {
  max-width: 460px;
  margin: 20px auto;
  padding: 20px;
}
</style>
<body class="grey lighten-4">
    <?php include('templates/navbar.php');  ?>
    <div class="container">
        <h4>Pizza Database</h4>
    </div>
    <?php include('templates/footer.php');  ?>
</body>
</html>