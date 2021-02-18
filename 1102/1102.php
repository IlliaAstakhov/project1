<?php
//$programLanguegeNew = [
//    'PHP',
//    'JS',
//    'C++',
//
//];
//unset($programLanguegeNew[1]);
//
//var_dump ($programLanguegeNew);
//print_r($programLanguegeNew);

$student = [
    'name' => 'Vasyl',
    'age' => '22',
    'isGoodBoy' => true,
    'gender' => 'male',
    'programminLanguges' => [
        'PHP',
        'JS',
        'C++',
    ],
];
//print_r($student);
var_dump($student['programminLanguges'][1]);