<?php
// associative array
/*
$students = [
    '12'=>'Tanjim',
    '13'=>'Zahid',
    '20'=>'Rupaush',
];
echo $students['12'];
*/
$foods = [
    'vegetables' => 'brinjal,broccoli,carrot,capsicam',
    'fruits'    =>  'orange,banana,apple',
    'drinks'    =>  'water,milk',
];

$foods['drinks'] = $foods['drinks'].",Orange Juice"; // same
$foods['drinks'] .= ",Orange Juice"; // same

echo $foods['vegetables'];
echo "\n";
foreach($foods as $key=>$value){
    echo $key." = ".$value."\n";
}

$keys = array_keys($foods);
print_r($keys);

echo "\n";

$keys = array_values($foods);
print_r($keys);

echo "\n";

$keys = array_keys($foods);
for($i = 0; $i <count($keys); $i++){
    $key = $keys[$i];
    echo $foods[$key]."\n";
}

echo "\n";

$values = array_values($foods);
for($i = 0; $i <count($values); $i++){
    $value = $values[$i];
    echo $value ."\n";
}