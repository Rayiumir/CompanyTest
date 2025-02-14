<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [App\Http\Controllers\Home\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin'], static function ($router){

    // Admin
    $router->get('/', [\App\Http\Controllers\Admin\AdminController::class, 'index']);

});
