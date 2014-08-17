<?php
require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\Slim();


$app->get('/hello', function() {
    echo json_encode(array("message" => "Hello"));
});

$app->get('/hello/:name', function($name) {
    echo json_encode(array("message" => "Hello " . ucfirst($name)));
});

$app->run();

