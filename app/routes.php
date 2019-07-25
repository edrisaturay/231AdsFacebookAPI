<?php
use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/', function(Request $request, Response $response, $args = []){
    return $this->view->render($response, 'home.twig');
});

$app->run();