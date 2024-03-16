<?php

$errors = array('name'=>'','title'=>'','ingredients'=>'');

if(isset($_POST['submit'])) {
    if(empty($_POST['mail'])) {
        echo 'email required';
    } else {
        $email = $_POST['mail'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "enter vaild e-mail";
        }
        //echo htmlspecialchars($_POST['mail']) . "<br/>";
    }
    
    if(empty($_POST['title'])) {
        echo 'email required';
    } else {
        $title = $_POST['title'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $title)) {
            echo "enter vaild title";
        }
    }

    if(empty($_POST['ingredients'])) {
        echo 'email required';
    } else {
        $ingredients = $_POST['ingredients'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            echo "enter vaild ingredients";
        }
    }

    //echo $_POST['title'] . "<br/>";
    //echo $_POST['ingredients'] . "<br/>";
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

