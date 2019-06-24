<?php
/**
 * Authenticated routes
 * Middleware 'auth', 'web'
 * Prefix pagination
 */

Route::namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->middleware('user-type:admin')
    ->group(function () {
        Route::get('users', 'UserController@pagination')->name('pagination.users');
    });
