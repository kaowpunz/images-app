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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// images
$router->get('images', 'ImagesController@index');
$router->post('images', 'ImagesController@index');

// users
$router->get('users', 'UsersController@index');
$router->get('users/name/{name}', 'UsersController@getUserByName');
$router->get('users/email/{email}', 'UsersController@getUserByName');
$router->post('users', 'UsersController@index');
$router->post('users/login', 'UsersController@login');

