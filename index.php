<?php

use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

require '../vendor/autoload.php';

$container['tc'] = function ($container) {
    require 'soap.php';
    $model = new M2M();
    return $model;
};

$app = new \Slim\App($container);

$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");
    return $response;
});

$app->get('/messages', function (Request $request, Response $response) {
    $tc = $this->get('tc');
    $m = $tc->peekMessages();
    $response->getBody()->write(print_r($m, true));
    return $response;
});

$app->get('/delivery', function (Request $request, Response $response) {
    $tc = $this->get('tc');
    $r = $tc->getDeliveryReports();
    $response->getBody()->write(print_r($r, true));
    return $response;
});


$app->get('/message/{msg}', function (Request $request, Response $response) {
    $tc = $this->get('tc');
    $msg = $request->getAttribute('msg');
    $r = $tc->sendMessage($msg);
    $response->getBody()->write(print_r($r, true));
    return $response;
});


$app->run();
