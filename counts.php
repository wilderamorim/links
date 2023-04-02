<?php
declare(strict_types=1);

require_once dirname(__FILE__) . '/config/helpers.php';


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
    file_put_contents($file, json($counts));
}

header('Content-Type: application/json');
echo json($counts);
