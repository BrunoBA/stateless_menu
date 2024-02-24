<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/bootstrap.php';

$app = AppFactory::create();
$app->addRoutingMiddleware();

$errorMiddleware = $app->addErrorMiddleware(true, true, true);
$app->get('/', function (Request $request, Response $response, $args) use ($entityManager) {

    $firstQuestionClass = "BrunoBA\Menu\Menu\FirstQuestion";
    $classe = new $firstQuestionClass;

    var_dump($classe->dale());
    die;


    $question = new \BrunoBA\Menu\Menu\FirstQuestion();

    $state = new \BrunoBA\Menu\State($question::class);
    $entityManager->persist($state);
    $entityManager->flush();

    $response->getBody()->write("Hello,".$state->getFqcn());
    return $response;
});

$app->run();
