<?php
$string = "Hello World, How are you";
$string2 ="Quick brown fox jumps over the lazy dog";
// $parts = explode(" ",$string);
// $parts = explode(",",$string);
$parts = explode(", ",$string);
print_r($parts);
echo PHP_EOL;

// $original = implode(" ", $parts);
$original = join(" ", $parts);
echo $original;

echo PHP_EOL;

$parts2 = str_split($string);
print_r($parts2);

echo PHP_EOL;

$parts3 = strtok($string," ,");
while($parts3 !== false){
    echo $parts3."\n"; //iterator
    $parts3 = strtok(" ,");
}

echo PHP_EOL;

$parts4 = strtok($string2," ,");
while($parts4 !== false){
    echo $parts4."\n";
    $parts4 = strtok(" ,");
}

echo PHP_EOL;

// $parts5 = preg_split("/ |,/",$string);
$parts5 = preg_split("/\s|,/",$string);
print_r($parts5);