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
    return "hello world";
});

$router->get('cards[/{id}]', function($id = null) {
    $cards = [1=> "card 1", 2  => "card 2"];

    if(isset($id)) {
        return json_encode($cards[$id]);
    }
    else {
        return json_encode($cards);
    }
    
});

$router->get('info', function() {
    return phpinfo();
});


$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('masters',  ['uses' => 'MasterController@showAllMasters']);
  
    $router->get('masters/{id}', ['uses' => 'MasterController@showOneMaster']);
  
    $router->post('masters', ['uses' => 'MasterController@create']);
  
    $router->delete('masters/{id}', ['uses' => 'MasterController@delete']);
  
    $router->put('masters/{id}', ['uses' => 'MasterController@update']);
  });