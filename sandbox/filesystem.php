<?php 

$file = 'readme.txt';

//filesystem
if(file_exists($file)) {
    $quotes = readfile($file);
    echo $quotes;
} else {
    echo "file not exist";
}




?>