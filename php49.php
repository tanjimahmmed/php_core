<?php
$fruits = array('a'=>'Array', 'b'=>'Banana', 'c'=>'Cherry', 'd'=>'Dates');
$key = array_rand($fruits);
// echo $key;
/*
shuffle($fruits);
print_r($fruits);\
*/
echo $fruits[$key];