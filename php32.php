<?php
// string to array
$vegetables = explode(',','brinjal, brocoli, carrot, capsicam');
var_dump($vegetables);
// first element ok


// delimeter
$vegetables = explode(', ','brinjal, brocoli, carrot, capsicam');
echo $vegetables[0];
echo "\n";
// but snd element provide an space the space remove use to space
echo $vegetables[1];        

echo "\n";
// array to string 
$vegetables = explode(', ','brinjal, brocoli, carrot, capsicam');
$vegetablesString = join(',',$vegetables);
echo $vegetablesString;
echo "\n";
echo count($vegetables);
echo "\n";
//=============
// when multiple delimeter not use, use preg_split
$vegetables = preg_split('/(, |,)/','brinjal, brocoli, carrot, capsicam,potato, sweet-potato,onion,ginger,lentil');
print_r($vegetables);
$vegetablesString = join(', ',$vegetables);
// echo $vegetablesString;
echo count($vegetables);