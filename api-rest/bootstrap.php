<?php

require_once 'vendor/autoload.php';

$app = new \Silex\Application();

$app->register(new Silex\Provider\UrlGeneratorServiceProvider());
$app->register(new Silex\Provider\ValidatorServiceProvider());

$app['debug'] = true;

$config = require_once 'config/config.php';

try {
    $pdo = new \PDO(
        $config['dsn'],
        $config['user'],
        $config['pass']
    );
} catch (\Exception $e) {
    die(sprintf("Database connect error: %s", $e->getMessage()));
}

$app['db'] = $pdo;