<?php
$student = array(
    'fname' => 'Jamal',
    'lname' => 'Ahmmed',
    'age'   =>  15,
    'class' =>  8,
    'section'=> 'B'
);
Print_r($student);
echo $student['fname']." ".$student['lname']."\n";
printf("%s %s \n",$student['fname'],$student['lname']);

// echo serialize($student);

$serialized = serialize($student);

$newstudent = unserialize($serialized);
print_r($newstudent);

echo "\n";
$jsondata = json_encode($student);
echo $jsondata;
echo "\n";
$student2 = json_decode($jsondata, true);
print_r($student2);