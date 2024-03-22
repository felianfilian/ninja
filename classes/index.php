<?php 

class User {
    public $email;
    public $name;

    public function __construct($name, $email){
        $this->email = $email;
        $this->name = $name;
    }

    public function login() {
        echo $this->name . " logged in";
    }
}

// $userOne = new User();
// echo $userOne->login();
// echo '<br/>';
// echo $userOne->name;

$userTwo = new User('yoshi', 'mario@pario');
echo $userTwo->login();
echo '<br/>';
echo $userTwo->name;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes Test</title>
</head>
<body>
    <h1>Classes</h1>
</body>
</html>