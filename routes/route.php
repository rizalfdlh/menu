<?php

use App\Controllers\HomeController;
use App\Controllers\MenuController;
use App\Models\Menu;
use App\Models\User;
use Support\Route;
use Support\View;
use Support\AuthMiddleware; //<-- Penambahan Middleware atau session login

// handleMiddleware();
Route::get('/test', function () {
    $user = User::all();
    // vd($user);
    $menu = Menu::all();
});
Route::get('/', [HomeController::class, 'index']);
Route::get('/customer', [HomeController::class, 'customer']);
Route::get('/customer/{id}', [HomeController::class, 'showUser']);
Route::post('/customer', [HomeController::class, 'create']);
Route::post('/update-customer/{id}', [HomeController::class, 'update']);

// Menu
Route::get('/menu', [MenuController::class, 'menu']);
Route::post('/menu', [MenuController::class, 'create']);
Route::post('/menu-edit/{id}', [MenuController::class, 'update']);
Route::delete('/menu-delete/{id}', [MenuController::class, 'delete']);
