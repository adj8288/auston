<?php

use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

require 'vendor/autoload.php';


//part of SLIM Framework (1 time)
$container['tc'] = function ($container) {
    require 'soap.php';
    $model = new TemperatureConverter();
    return $model;
};

//input the container here
$app = new \Slim\App($container);

$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");
    return $response;
});

$app->get('/celsius/{t}', function (Request $request, Response $response) { //curly {t} is an ID to identify
    $c = $request->getAttribute('t'); //get all the input 1 value at a time for this case
    $tc = $this->get('tc'); //get the soap client
    $f = $tc->CelsiusToFahrenheit($c); //call the method which belongs to the soap
    $response->getBody()->write($f); //output in http or JSON object
    return $response;
});

$app->get('/fahrenheit/{t}', function (Request $request, Response $response) {
    $f = $request->getAttribute('t');
    $tc = $this->get('tc'); //calling the temperature converter class method
    $c = $tc->FahrenheitToCelsius($f);
    $response->getBody()->write($c);
    return $response;
});

$app->run();
