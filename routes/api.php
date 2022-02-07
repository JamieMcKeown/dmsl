<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//Login
Route::post('/login', 'App\Http\Controllers\LoginController@login');

//Register
Route::post('/register', 'App\Http\Controllers\RegistrationController@register');
Route::put('/register', 'App\Http\Controllers\RegistrationController@update');
Route::get('/register/{id}', 'App\Http\Controllers\RegistrationController@get');
