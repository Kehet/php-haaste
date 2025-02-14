<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'vendor/autoload.php';

function assertTrue(bool $condition, ?string $message = null)
{
    if (!$condition) {
        throw new RuntimeException($message ?? 'Failed asserting that false is true.');
    }
}

$request = $_SERVER['SCRIPT_NAME'];

if (file_exists(__DIR__ . '/src' . $request)) {
    require __DIR__ . '/src' . $request;
    die(0);
}

header('HTTP/1.0 404 Not Found');
echo '404 Not found';
