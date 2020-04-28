<?php
$number = 12;
if(12 == $number){
    echo "{$number} Twelve";
}elseif(10 == $number){
    echo "{$number} Ten";
}else{
    "{$number} Is a Number";
}
echo "\n";

$numberInWorld = (12 == $number) ? "Twelve" : "A Number";
echo $numberInWorld;

echo "\n";

if( $number % 2 == 0 ){
    echo "even number";
}else{
    "odd number";
}
echo "\n";
$result = ($number % 2 == 0) ? "even" : "odd";
echo $result;

echo "\n";

$new = (12 == $number) ? "Twelve" : (10 == $number) ? "Ten" : "A Number";
echo $new; 


