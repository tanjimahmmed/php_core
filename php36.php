<?php
$person = ['fname' => 'korim', 'lname' => 'hossain','age'=>'22'];

print_r($person);

unset($person['lname']);
unset($person['age']);

print_r($person);