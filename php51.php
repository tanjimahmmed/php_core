<?php
$string = "Hello World";
/*
echo $string[0];
echo "\n";
echo $string[-5];
echo substr($string,1,4);
*/
$length = strlen($string);
echo substr($string,$length-3);
echo PHP_EOL;
echo substr($string,-3);
echo PHP_EOL;
echo substr($string,-7,-4);
// echo substr($string,-7,4);