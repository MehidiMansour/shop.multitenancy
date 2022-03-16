<?php

use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(["prefix"=>"V1/admin", 'middleware' => ['auth:sanctum', 'tenant']], function () {
        Route::get('/', 'DashboardController@index');
        Route::get('/user', function (Request $request) {
            return view('welcome');
        });
});
