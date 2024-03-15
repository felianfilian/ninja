<?php 
if(isset($_GET['submit'])) {
    echo $_GET['mail'] . "<br/>";
    echo $_GET['title'] . "<br/>";
    echo $_GET['ingredients'] . "<br/>";
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
    <nav class="white depth-0"> 
    <div class="container">
            <a href="#" class="brand-logo brand-text">Ninja Pizza</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li><a href="#" class="btn brand z-depth-0">Add Pizza</a></li>
            </ul>
        </div>
    
    </nav>    

    <section class="container grey-text">
        <h4 class="center">Add a Pizza</h4>
        <form class="white" action="add.php" method="GET" style="max-width: 460px">
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

