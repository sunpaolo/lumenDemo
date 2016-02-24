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

$app->get('/', function () use ($app) {
    return $app->version();
});

$api = $app['api.router']; //app('Dingo\Api\Routing\Router');
$api->version('v1', function($api) {
    $api->get('hello', function(){
        //return ['name' => 'paolo'];
        return config('api');
    });
});

//$app->group(['namespace' => 'App\Http\Controllers'], function() use ($app){
    $app->get('index', [
        'uses' => 'ExampleController@index'
    ]);
//});
