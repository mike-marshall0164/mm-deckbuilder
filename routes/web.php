<?php

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
    return view('testView', ['name' => 'World']);
});

$router->get('info', function() {
    return phpinfo();
});

/**
 * Routes for resource card
 */
$router->get('card', 'CardsController@all');
$router->get('card/{id}', 'CardsController@get');
$router->post('card', 'CardsController@add');
$router->put('card/{id}', 'CardsController@put');
$router->delete('card/{id}', 'CardsController@remove');

/**
 * Routes for resource master
 */
$router->get('master', 'MastersController@all');
$router->get('master/{id}', 'MastersController@get');
$router->post('master', 'MastersController@add');
$router->put('master/{id}', 'MastersController@put');
$router->delete('master/{id}', 'MastersController@remove');


/**
 * Routes for resource deck
 */
$router->get('deck', 'DecksController@all');
$router->get('deck/{id}', 'DecksController@get');
$router->post('deck', 'DecksController@add');
$router->put('deck/{id}', 'DecksController@put');
$router->delete('deck/{id}', 'DecksController@remove');

/**
 * Routes for resource User
 */
$router->get('user', 'UsersController@all');
$router->get('user/{id}', 'UsersController@get');
$router->post('user', 'UsersController@add');
$router->put('user/{id}', 'UsersController@put');
$router->delete('user/{id}', 'UsersController@remove');