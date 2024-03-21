<?php 

if(isset($_POST['submit'])) {
    setcookie('type', $_POST['type'], time() + 86400, "/");
    session_start();
    $_SESSION['name'] = $_POST['name'];
    echo $_SESSION['name'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sandbox</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text" name="name">
        <select name="type">
            <option value="human">human</option>
            <option value="animal">animal</option>
        </select>
        <input type="submit" name="submit" value="submit">
    </form>
</form>
</body>
</html>