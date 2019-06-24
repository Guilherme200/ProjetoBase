<?php

use App\Enums\UserTypes;

/**
 * Authenticated routes
 * Middleware 'auth'
 */
Route::get('/', 'SingleInvokes\WelcomeController');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('verified', 'HomeController@verified')->name('verified');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->middleware('user-type:' . UserTypes::ADMIN)
    ->group(function () {
        Route::resource('users', 'UserController');
    });
