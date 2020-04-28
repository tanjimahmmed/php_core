<?php
$i = 0;
while($i < 5){
    echo $i;
    echo "\n";
    $i++;
}
echo "========\n";

$j = 0;
while($j++ < 5){
    echo $j;
    echo "\n";
}

echo "========\n";

$j = 0;
while(++$j <5){
    echo $j;
    echo "\n";
}