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

for($i = 0; $i < 5; $i++){
    echo "ninja <br/>";
}

?>