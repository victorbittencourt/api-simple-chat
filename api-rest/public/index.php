<?php

require_once '../bootstrap.php';

use Chat\Controllers\UserController;
use Chat\Mappers\UserMapper;
use Chat\Services\UserService;

$app['service.user'] = function() use ($app) {    
    $userService = new UserService(new UserMapper($app['db']));
    return $userService;
};

$app->mount("/user", new UserController());

/**
 * Execute fixtures to create tables
 */

$fixtures = file_get_contents('../database/sql-database.sql');

$app->get("/fixtures", function() use ($app, $fixtures) {
    $app['db']->exec($fixtures);
    return $app->json(["success"=>true]);
});

$app->run();