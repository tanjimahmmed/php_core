<?php
/*
$numbers = range(40,72);
$random = mt_rand(0, 32);
// echo $random;
echo $numbers[$random]."\n";

$random = mt_rand(0, 32);
echo $numbers[$random];
// echo count($numbers);
// print_r($numbers);
*/
/*
maimuna = 0 0 1 1 1 1 1 0 1 1 = 7
Tanjim = 1 0 0 1 1 1 1 0 1 1 = 7
*/
$numbers = range(40,72);
$random = mt_rand(0,32);

$random = mt_rand(0,32);

$luck = $numbers[$random];
if($luck %2 == 0){
    echo "Head";
}else{
    echo "Tail";
}
// shuffle($numbers);
print_r($numbers);
$randomNumber = $numbers[3];
echo $randomNumber;