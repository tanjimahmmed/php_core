<?php
/*
$numbers = array();
for ($i = 12; $i < 21; $i++) {
    array_push($numbers, $i);
}
*/
// $numbers = range(12,20);
// $numbers = range(12,20,2); // print only even number
/*
foreach(range(12,20,2) as $evenNumber){
    echo $evenNumber."\n";
}
*/
// foreach(range(11,20,2) as $evenNumber){
//     echo $evenNumber."\n";
// }
// print_r($numbers);
/*
foreach(range(0,50,7) as $evenNumber){
    if($evenNumber > 0){
        echo $evenNumber."\n";
    }
}
print_r($evenNumber);
*/
foreach (range(0, 60, 11) as $number){
    if($number > 0){
        echo $number."\n";
    }
}
print_r($number);