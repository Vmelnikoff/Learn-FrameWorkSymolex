<?php declare(strict_types=1);

require_once __DIR__.'/init.php';

/** @var \Symfony\Component\HttpFoundation\Request $request */
$name = $request->get('name', 'World');

$response->setContent(sprintf('Hello %s', htmlspecialchars($name, ENT_QUOTES, 'UTF-8')));
$response->send();