<?php
$array = [
    '+380666855207',
    '+380666855207'
];
$arrays = [];
var_dump($array);
foreach ($array as $key => $value){
    if (array_key_exists($value, $arrays)){
        echo "{$value} as {$arrays}";
    }
}