<?php declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

//$request = Request::createFromGlobals();
$request = Request::create('/index.php?name=Fabien');

$name = $request->get('name', 'World');

//$response = new Response(sprintf('Hello %s', htmlspecialchars($name, ENT_QUOTES, 'UTF-8')));
$response = new Response();

$response->setContent('Hello world!');
$response->setStatusCode(200);
$response->headers->set('Content-Type', 'text/html');

// configure the HTTP cache headers
$response->setMaxAge(10);

$response->send();