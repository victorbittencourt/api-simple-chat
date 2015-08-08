<?php

namespace Chat\Controllers;

use \Silex\ControllerProviderInterface;
use \Silex\Application;

class UserController implements ControllerProviderInterface
{
    public function connect(Application $app) 
    {
        $controller = $app["controllers_factory"];
        
        $controller->get('/', function() use ($app) {
            return $app->json(["Hello World"]);
        });
        
        $controller->get('/auth/{email}/{pass}', function($email, $pass) use ($app) {
            return $app->json($app['service.user']->auth($email, $pass));
        });
        
        return $controller;
    }
}