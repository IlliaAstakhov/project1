<?php
$file = __DIR__ . '/storage/' . date('Y-m-d') . '.json';
if (file_exists($file)){
    $jsonData = file_get_contents($file);
}
else {
    $jsonData = '[]';
}
$storage = json_decode($jsonData, true);

$data = $_POST;
$data['time'] = date('H-i-s');

$storage[] = $data;

$jsonData = json_encode($storage);

file_put_contents($file, $jsonData);

header('Location: index.php');