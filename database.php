<?php

$conn = mysqli_connect('localhost', 'mario', 'avalon', 'ninja_pizza');

if(!$conn) {
    echo "connection error";
}

// write query for all
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';
// make query and get result
$result = mysqli_query($conn, $sql);
// fetch resulting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory
mysqli_free_result($result);
// close connection
mysqli_close($conn);


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
        <h4 class="grey-text center">Pizza Database</h4>
        <div class="row">
            <?php foreach($pizzas as $pizza) { ?>
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                            <div><?php echo htmlspecialchars($pizza['ingredients']); ?></div>
                        </div>
                        <div class="card-action right-align">
                            <a href="#" class="brand-text">more info</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php include('templates/footer.php');  ?>
</body>
</html>