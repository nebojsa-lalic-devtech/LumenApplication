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

//$app->get('/', function () use ($app) {
//    return $app->version();
//});

$app->get('/', function () {
    return 'Welcome to Employee CRUD APP with Lumen! :)';
});

$app->group(['prefix' => '/employee'], function () use ($app) {
    $app->get('/', 'EmployeeController@index');
    $app->get('/{id}', 'EmployeeController@getEmployee');
    $app->post('/', 'EmployeeController@saveEmployee');
    $app->put('/{id}', 'EmployeeController@updateEmployee');
    $app->delete('/{id}', 'EmployeeController@deleteEmployee');
    $app->get('/auth', ['middleware' => 'auth', 'uses' => 'EmployeeController@helloFromController']);

});