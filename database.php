<?php

// get cookie
$type = $_COOKIE["type"] ?? 'Unknown';
echo htmlspecialchars($type) . "<br/>";

session_start();
if(isset($_SESSION['name'])) {
    echo $_SESSION['name'] . "<br/>";
    unset($_SESSION['name']);
} else {
    echo "no session variable" . "<br/>";
}


include('./config/db_connect.php');

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

$ingredients = explode(',', $pizzas[0]['ingredients']);

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
                            <ul>
                                <?php foreach(explode(',', $pizza['ingredients']) as $ing) { ?>
                                <li><?php echo htmlspecialchars($ing) ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="card-action right-align">
                            <a class="brand-text" href="details.php?id=<?php echo $pizza['id'] ?>">more info</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php  ?>
        </div>
    </div>
    <?php include('templates/footer.php');  ?>
</body>
</html>