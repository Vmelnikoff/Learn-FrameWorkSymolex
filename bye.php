<?php declare(strict_types=1);

require_once __DIR__.'/init.php';

$response->setContent('Goodbye!');
$response->send();