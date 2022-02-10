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

//Players
Route::post('/register', 'App\Http\Controllers\PlayerController@register');
Route::post('/register/search', 'App\Http\Controllers\PlayerController@search');
Route::put('/register', 'App\Http\Controllers\PlayerController@update');
Route::get('/register/{id}', 'App\Http\Controllers\PlayerController@get');
