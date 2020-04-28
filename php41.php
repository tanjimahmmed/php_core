<?php
$fruits = array('apple','banana','orange','plum','dates','mango');
sort($fruits);
print_r($fruits);

$numbers = array(11,12,5,6,8,55);
sort($numbers);
print_r($numbers);

$fruits = array('a'=>'apple','b'=>'banana','orange','f'=>'plum','dates','c'=>'mango');
asort($fruits);
print_r($fruits);

$numbers = array(11,5,99,33,1,7);
asort($numbers);
// arsort($numbers);
print_r($numbers);

$n = count($numbers);
for($i = 0; $i < $n; $i++){
    echo $numbers[$i]."\n";
}
echo "\n";
foreach($numbers as $number){
    echo $number."\n";
}

$fruits = array('apple','banana','orange','plum','dates','mango');
ksort($fruits);
// krsort($fruits);
print_r($fruits);
foreach($fruits as $fruit){
    echo $fruit."\n";
}

$numbers = array(11,12,5,6,8,55);
sort($numbers, SORT_STRING);
print_r($numbers);

$random = array("apple","Apple","banana","Banana","Pineapple");
// sort($random); //sort sensative
sort($random, SORT_STRING + SORT_FLAG_CASE); //sort insensetive
print_r($random);