<?php
$n = 12;
$r = $n % 2;

switch ($r) {
    case 0:
        echo "{$n} is an even number";
        break;
    default:
        echo "{$n} is odd number";
}

echo "\n";

$color = 'red';
switch ($color) {
    case 'red':
    case 'green':
        echo ucwords($color)." is my favorite color";
        break;
    case 'blue':
        echo "Blue is not my favorite color";
        break;
    default:
        echo "This color is ok";
}

echo "\n";
$color2 = 'red';
if ('red' == $color2 || 'green' == $color2){
    echo "$color2";
}