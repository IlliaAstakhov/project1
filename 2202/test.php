<?php
$menu = [
    'Our services' => [
        1,
        2,
        3,
    ],
    'Prices',
    'Cases',
    'About Us',
    'Contacts',
];

foreach ($menu as $value){
    if (is_array($value)){
        foreach ($value as $key => $value1) {
            echo "[{$value}] ==> $value1";
        }
        echo '<br>';
        continue;
    }
    echo $value;
    echo '<br>';
}

