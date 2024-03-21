<?php 

$file = 'readme.txt';

//filesystem
if(file_exists($file)) {
    $quotes = readfile($file);
    copy($file, 'quotes.txt');
    echo $quotes;
} else {
    echo "file not exist";
}




?>