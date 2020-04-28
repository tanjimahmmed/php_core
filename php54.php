<?php
$string = "Quick brown Fox fox jumps over the lazy dog";
// echo $string[12];
// echo strpos($string, "fox");
// echo stripos($string, "fox", 13);
// echo stripos($string, "fox");
// $offset = strpos($string, "Quick");
$offset = strrpos($string, "brown");
echo $offset;
/*
if($offset !== false){
    echo "\nWorld Was Found\n";
}else{
    echo "\nWorld Was Not Found\n";
}

if($offset != false){
    echo "\nWorld Was Found\n";
}else{
    echo "\nWorld Was Not Found\n";
}
*/