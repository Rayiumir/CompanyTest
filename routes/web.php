<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [App\Http\Controllers\Home\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], static function ($router){

    // Admin
    $router->get('/', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.index');
    $router->get('/logout', [\App\Http\Controllers\Admin\AdminController::class, 'logout'])->name('admin.logout');

    // User

    $router->resource('/users', \App\Http\Controllers\Admin\UserController::class)->except('show');

});
