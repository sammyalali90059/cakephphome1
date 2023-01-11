<?php
use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;
$routes->connect('/pet/:name', ['controller' => 'Pets', 'action' => 'view'], ['pass' => ['name']]);
$routes->connect('/users', ['controller' => 'Users', 'action' => 'users']);
$routes->connect('/pet/edit/*', ['controller' => 'Users', 'action' => 'edit']);



$routes->scope('/', function (RouteBuilder $builder) {
        $builder->connect('/', ['controller' => 'Users']);
        
        $builder->connect('/pet/:name', ['controller' => 'Pets', 'action' => 'view'], ['pass' => ['name']]);

        $builder->fallbacks(DashedRoute::class);

    });