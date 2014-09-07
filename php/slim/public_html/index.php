<?php
require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\Slim();


$app->get('/hello', function() use ($app) {
    $app->response->headers->set('Content-Type', 'application/json');
    $app->response->write(json_encode(array("message" => "Hello")));
});

$app->get('/hello/:name', function($name) use ($app) {
    $app->response->headers->set('Content-Type', 'application/json');
    $app->response->write(json_encode(array(
        "message" => "Hello " . ucfirst($name)
    )));
});

$app->run();

