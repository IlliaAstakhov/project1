<?php

$directoryName = $_POST['directoryName'] ?? null;

if (!$directoryName) {
    exit('Directory name is required');
}



$rout = __DIR__ . '/storage/';

$userDir = $_POST['dir'] ?? '';
if ($userDir) {
    $rout .= "{$userDir}/";
}
$rout .=  $directoryName;

if (is_dir($rout)) {
    exit(sprintf('Directory "%s" is already exist', $directoryName));
}

$IsDirCreated = mkdir($rout);
if(!$IsDirCreated) {
    exit(sprintf('Directory "%s" was not created', $directoryName));
}

header('Location: index.php');