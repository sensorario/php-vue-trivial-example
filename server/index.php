<?php

header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Origin: *');
header('Content-Type: *');

if ('OPTIONS' == $_SERVER['REQUEST_METHOD']) { die; }

$rawRequest = file_get_contents('php://input');

$json = json_decode($rawRequest);

echo json_encode([
    'code'    => 200,
    'request' => $json,
    'success' => true,
]);
