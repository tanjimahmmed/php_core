<?php
/*
for($i = 1; $i<10; $i++){
    echo $i;
    echo "\n";

    if($i==6){
    break;
    }
}
*/
/*
for ($i = 20; $i < 50; $i++){
    if($i % 13 == 0){
        echo $i;
        echo "\n";
    break;
    }
}
*/

for ($i = 20; $i < 30; $i++){
    if($i < 27){
        continue;
        // goto a;
    }
    echo $i;
    echo "\n";

    // a: '';
}