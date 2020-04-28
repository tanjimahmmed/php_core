<?php
$fruits = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');
$random = array("a"=>12,"b"=>30,"c"=>60,"d"=>22,"e"=>55,"f"=>31, 12=>78, "g"=>88);

// $someFruits = array_splice($fruits,-5,2,true);
$newFruits = array("jackfruit","tamarind","pineapple");
$someFruits = array_splice($fruits,-5,2,$newFruits);

print_r($someFruits);
print_r($fruits);