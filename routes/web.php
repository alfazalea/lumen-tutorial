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

use Illuminate\Http\Response;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/example', 'ExampleController@index');

$router->get('/user/{name}','UserController@getMyName');

$router->get('/randomcode','ExampleController@getRandomCode');

$router->get('/userby/{id}','ExampleController@getUserById');

$router->post('/calculate','ExampleController@calculate');

$router->get('/response',function (){
    return (new Response(['name'=>'alfazalea'], 200))
        ->header('Content-Type', 'application/json');
});

$router->get('/user',function (){
    return response()->json(
        [
            'id'=>1,
            'name' => 'alfazalea',
            'age' => '20'
        ]
    );
});


$router->get('/download',function (){
    return response()->download($pathToFile);
});

$router->get('/redirect',function (){
    return redirect('home/dashboard');
});
