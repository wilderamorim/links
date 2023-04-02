<?php
declare(strict_types=1);

require_once dirname(__FILE__) . '/config/helpers.php';


$app = require dirname(__FILE__) . '/config/app.php';
uasort($app['links'], fn($a, $b) => ($b['isHighlight'] ?? false) <=> ($a['isHighlight'] ?? false));

view('home', [
    'title' => $app['name'] . (isset($app['title']) ? " - {$app['title']}" : null),
    'githubUrl' => current(array_filter($app['links'], fn($link) => $link['name'] === 'GitHub'))['url'],
    'links' => $app['links'],
]);
