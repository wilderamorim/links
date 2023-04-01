<?php

function jsonEncode(array $json)
{
    return json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
}

$path = dirname(__FILE__) . '/api';
$file = $path . '/counts.json';

$counts = [];
if (file_exists($file)) {
    $counts = json_decode(file_get_contents($file), true);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $linkName = $_POST['linkName'];
    if (isset($counts[$linkName])) {
        $counts[$linkName]++;
    } else {
        $counts[$linkName] = 1;
    }

    if (!is_dir($path)) {
        mkdir($path);
    }
    file_put_contents($file, jsonEncode($counts));
}

header('Content-Type: application/json');
echo jsonEncode($counts);
