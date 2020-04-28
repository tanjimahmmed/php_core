<?php
$foods = [
    'Vegetables' => explode(', ', 'brinjal, brocolli, carrot, capsicam'),
    'fruits'    => explode(', ', 'orange, banana, apple'),
    'drinks'    => explode(', ', 'water, milk'),
];
print_r($foods);

array_push(
$foods['drinks'],'orange juice');
print_r($foods);
echo $foods['Vegetables'][3];

echo "\n";

$sample = [
    'test' => [
        'test-again' =>[
            'a',
            'b',
            'c',
            'd'
        ]
    ]
];

echo $sample['test']['test-again'][2];
echo "\n";
echo "======================="."\n";
// multi dimenton array
$sample2 = [
    [1,2,3,4,5],
    [11,22,33,44,55],
    [99,22,55,45,35],
    [1111,2222,3333,4444,5555],
    [1111,2222,3333,4444,5555],
    [1111,2222,3333,4444,5555],
    [1111,2222,3333,4444,5555],
    [1111,2222,3333,4444,5555],
    [1111,2222,3333,[5,6,7]],
];
print_r($sample2);

echo $sample2[8][3][2];