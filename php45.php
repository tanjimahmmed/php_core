<?php
/*
$numbers = array(1,2,3,4,5,6);

function sum($oldValue=0, $newValue){
return $oldValue+$newValue;
}
$sum = array_reduce($numbers, 'sum');
// $sum = array_reduce($numbers, 'sum',1);
echo $sum;
 */
/*
$numbers = array(1, 2, 3, 4, 5, 6);

function sum($oldValue, $newValue){
    if ($newValue % 2 == 1) {
        return $oldValue + $newValue;
    }
    return $oldValue;
}

$sum = array_reduce($numbers, 'sum');
echo $sum;
 */

$numbers = array(1, 2, 3, 4, 5, 6);

function sum($oldValue, $newValue){
    if ($newValue % 2 == 0) {
        return $oldValue + $newValue;
    }
    return $oldValue;
}

$sum = array_reduce($numbers, 'sum');
echo $sum;
echo "\n";
echo count($numbers);