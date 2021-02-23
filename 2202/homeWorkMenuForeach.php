<?php

$menu = [
    'Our services' => [
        'CRM' => [
            'Bitrix24',
            'AMO CRM',
            'YClient',
        ],
        'CRM Marketing' => [
            'E-mail',
            'SMS',
            'Promo'
        ],
        'Call Tracking',
        'IP-Telephony',
    ],
    'Prices' => [
        'Introduction',
        'Support',
    ],
    'Cases',
    'About Us',
    'Contacts',
];

var_dump ($menu);
echo '<br>';

//foreach ($menu as $key => $value){
//    echo "[{$key}] = {$value}";
//}
//foreach ($menu as $key => $value){
//    if (is_array($value)){
//        foreach ($value as $value1) {
//            if (is_array($value1)){
//                foreach ($value1 as $value2) {
//                    echo "{$value1} ==> {$value2}";
//                    echo '<br>';
//                }
//            }
//            echo "{$value} ==> {$value1}";
//            echo '<br>';
//        }
//    }
//
//
//    echo "[$key] ==> {$value}";
//    echo '<br>';
//}
foreach ($menu as $arrays){
    foreach ($arrays as $array){
        foreach ($array as $key => $value){
            echo $key .'-'. $value;
        }
    }
}

?>
<ul>
    <li><a href="/link1">Text 1</a></li>
    <li><a href="/link2">Text 2</a></li>
    <li>
Text 3
<ul>
            <li><a href="/link3_1">Text 3.1</a></li>
            <li><a href="/link3_2">Text 3.2</a></li>
        </ul>
    </li>
</ul>