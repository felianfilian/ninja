<?php
$num = 23.234;
echo floor($num);

$names = array('mario', 'luigi');
$names02 = ['peach', 'toad'];
array_push($names, 'bowser');
print_r($names);
echo count($names);
$names03 = array_merge($names, $names02);
print_r($names03);

foreach($names as $name){
    echo $name . "<br/>";
}

$numbers = [2,3,5,7,8,9];

foreach($numbers as $number) {
    if($number > 5) {
        echo $number . "<br/>";
    }
}

function sayHello($name = 'mario') {
    echo "hello " . $name . "<br/>";
}
sayHello();
sayHello('peach');

?>