<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'vendor/autoload.php';

file_put_contents(
    'access.log',
    sprintf(
        "%s %s %s %s %s\n",
        date('Y-m-d H:i:s'),
        $_SERVER['REMOTE_ADDR'],
        $_SERVER['REQUEST_METHOD'],
        $_SERVER['REQUEST_URI'],
        json_encode($_REQUEST, JSON_THROW_ON_ERROR)
    ),
    FILE_APPEND
);

$request = $_SERVER['SCRIPT_NAME'];

if (file_exists(__DIR__ . '/src' . $request)) {
    $response = require __DIR__ . '/src' . $request;

    if (isset($response)) {
        $array = $_REQUEST;

        if (isset($array['id'])) {
            unset($array['id']);
        }

        $array['result'] = $response;

        file_put_contents(
            'access.log',
            json_encode($array, JSON_THROW_ON_ERROR) . "\n",
            FILE_APPEND
        );
    }

    echo $response;

    die(0);
}

header('HTTP/1.0 404 Not Found');
echo '404 Not found';
