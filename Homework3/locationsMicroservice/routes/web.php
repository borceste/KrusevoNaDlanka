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

//API calls routes

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('locations',  ['uses' => 'LocationController@showAllLocations']);

    $router->get('locations/{id}', ['uses' => 'LocationController@showOneLocation']);

    $router->post('location', ['uses' => 'LocationController@create']);

    $router->delete('locations/{id}', ['uses' => 'LocationController@delete']);

    $router->put('locations/{id}', ['uses' => 'LocationController@update']);
});
