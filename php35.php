<?php
$person = array('fname' => 'Hello', 'lname' => 'World');
// copy by value
// deep by copy
$newperson = $person; // & = copy by reference - shallow copy
$newperson['lname'] = 'Pluto';

print_r($person);
print_r($newperson);

function printData(&$person)
{
    $person['fname'] .= " changed";
    print_r($person);
}

printData($person);
print_r($person);