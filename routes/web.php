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

// Return all categories
$router->get('/api/categorias', 'CategorieController@getAll');
$router->get('/api/filmes', 'MovieController@getAll');

// Endpoint Categories
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('categoria/{id}', 'CategorieController@get');
    $router->post('categoria', 'CategorieController@create');
    $router->put('categoria/{id}', 'CategorieController@edit');
    $router->delete('categoria/{id}', 'CategorieController@delete');
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('filme/{id}', 'MovieController@get');
    $router->post('filme', 'MovieController@create');
    $router->put('filme/{id}', 'MovieController@edit');
    $router->delete('filme/{id}', 'MovieController@delete');
});


