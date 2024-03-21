<?php 

// filesystem test 02
$file = 'readme.txt';
$handle = fopen($file, 'r');
//echo fread($handle, filesize($file));

echo fgets($handle);
echo fgets($handle);

//filesystem test 01
// if(file_exists($file)) {
//     $quotes = readfile($file);
//     copy($file, 'quotes.txt');
//     rename($file, 'mario.txt');
//     echo $quotes;
// } else {
//     echo "file not exist";
// }




?>