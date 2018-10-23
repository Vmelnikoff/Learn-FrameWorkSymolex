<?php declare(strict_types=1);

$name = isset($_GET['name']) ? $_GET['name'] : 'World';

printf('Hello %s', $name);