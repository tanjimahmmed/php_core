<?php
$fruits = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');

// $someFruits = array_slice($fruits,2);
// $someFruits = array_slice($fruits,2,2,true);
// $someFruits = array_slice($fruits,2,-1);
// $someFruits = array_slice($fruits, -4, 2);
// $someFruits = array_slice($fruits, -5, -1);
$someFruits = array_slice($fruits, 3, 3, true);

print_r($someFruits);

$random = array("a"=>12,"b"=>30,"c"=>60,"d"=>22,"e"=>55,"f"=>31, 12=>78, "g"=>88);

// $randomData = array_slice($random, 3, null, true);
// $randomData = array_slice($random, 4, -2, true);
// $randomData = array_slice($random, -4, 2, true);
// $randomData = array_slice($random, -4, -1, true);
$randomData = array_slice($random, 1, -1, true);

print_r($randomData);