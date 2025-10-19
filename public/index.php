<?php

use App\Kernel;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\HttpFoundation\Request;

require dirname(__DIR__).'/vendor/autoload.php';

// The Dotenv component is often used in the old-style index.php
// If you don't have symfony/dotenv installed, you may need to run: composer require symfony/dotenv
if (!class_exists(Dotenv::class)) {
    throw new \RuntimeException('The "symfony/dotenv" package must be installed to load the environment variables. Run "composer require symfony/dotenv"');
}

(new Dotenv())->bootEnv(dirname(__DIR__).'/.env');

$kernel = new Kernel($_SERVER['APP_ENV'], (bool) $_SERVER['APP_DEBUG']);
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);