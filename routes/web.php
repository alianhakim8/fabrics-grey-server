<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// header('Access-Control-Allow-Origin: *');
header( 'Access-Control-Allow-Headers: Authorization, Content-Type' );
header( 'Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods:*');

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    
    $router->group(['namespace' => 'Auth'], function() use ($router) {
        $router->post('register', 'AuthController@register');
        $router->post('login', 'AuthController@login');
    });

    $router->group(['namespace' => 'Fabric', 'prefix' => 'fabric'], function () use ($router) {
        $router->get('/', 'FabricController@index');
        $router->post('/store', 'FabricController@store');
        $router->put('/update/{id}', 'FabricController@update');
        $router->delete('/delete/{id}', 'FabricController@delete');
        $router->get('/show/{id}', 'FabricController@show');
    });
    
    $router->group(['namespace' => 'Machine', 'prefix' => 'machine'], function () use ($router) {
        $router->get('/', 'MachineController@index');
    });
});
