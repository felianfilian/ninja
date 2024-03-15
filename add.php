<?php 
if(isset($_POST['submit'])) {
    echo $_POST['mail'] . "<br/>";
    echo $_POST['title'] . "<br/>";
    echo $_POST['ingredients'] . "<br/>";
}

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

    <section class="container grey-text">
        <h4 class="center">Add a Pizza</h4>
        <form class="white" action="add.php" method="POST" style="max-width: 460px">
            <label>Mail</label>
            <input type="text" name="mail" placeholder="mail">
            <label>Title</label>
            <input type="text" name="title" placeholder="title">
            <label>Ingredients</label>
            <input type="text" name="ingredients" placeholder="ingredients">
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>

    </section>

</body>

<?php include('templates/footer.php');  ?>
</html>

