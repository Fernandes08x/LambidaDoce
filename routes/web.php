<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::redirect('/', '/admin');

Route::controller(AdminController::class)->group(function() {
    Route::get('/admin', 'Home')->name ('admin.home');
});

Route::get('/cadastrar', [UserController::class, 'create'])
->name('user.create');

Route::post('/cadastrar', [UserController::class, 'store'])
->name('user.store');