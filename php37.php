<?php
$name = 'empty';

if(isset($name)){
    echo "name is set";
}else{
    echo "Not Set";
}

echo "\n";

if(empty($name)){
    echo "name is empty";
}else{
    echo "not empty";
}

echo "\n";

if(isset($name) && (is_numeric($name) || $name != '')){
    echo "Name is set and it's not empty";
}else{
    echo 'Name is either not set or it\'s empty';
}