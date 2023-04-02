<?php
declare(strict_types=1);

function view(string $view, array $params): void
{
    extract($params);
    include $view . '.php';
}

function asset(string $path): string
{
    $path = 'assets/' . ($path[0] == '/' ? mb_substr($path, 1) : $path);
    $dir = dirname(__DIR__, 1) . '/' . $path;
    if (!file_exists($dir)) {
        $path .= '?v=' . filemtime($dir);
    }
    return $path;
}

function json(array $json): string
{
    return json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
}
