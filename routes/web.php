<?php

use App\Models\User;

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth', 'Role:10']], function () {
    Route::get('/', 'DashboardController@index')->name('dash');
    Route::resource('users', 'UserController');
    Route::resource('companies', 'CompanyController');
    Route::resource('tenants', 'TenantController');
    Route::resource('shops', 'ShopController');
});

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('tenant')->group(function() {
    // Tenant routes
    Route::get('/host', function () {
        return User::where('id',app('currentTenant')->id)->first();
    });
    Route::get('/tenant', function () {
        return app('currentTenant');
    });

});