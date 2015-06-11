<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$app->get('/', function() {
    return view('home');
});

$app->post('/create', 'App\Http\Controllers\Redirector@create');
$app->get('/{path:[0-9A-Za-z-_]+}', 'App\Http\Controllers\Redirector@go');

