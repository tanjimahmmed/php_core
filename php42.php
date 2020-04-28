<?php
$names = array('a'=>'Rahim','b'=>'Korim','c'=>'Jabbar','d'=>'Salam');
$numbers = array(1,2,55,'10',41,33,22,77,44,20,17);

if(in_array(10, $numbers, true)){
    echo '10 is found';
}else{
    echo 'not found';
}
echo "\n";
$offset = array_search(55, $numbers);
echo $offset;

echo "\n";

if(key_exists('a',$names)){
    echo "Key a Exist";
}