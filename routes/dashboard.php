<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;

Route::middleware('auth', 'ifadmin')->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/category', [CategoryController::class, 'index']);
    Route::get('/add-category', [CategoryController::class, 'create']);
    Route::post('/add-category', [CategoryController::class, 'store']);
    Route::get('/edit-category/{category_id}', [CategoryController::class, 'edit']);
    Route::put('/edit-category/{category_id}', [CategoryController::class, 'update']);
    Route::get('/delete-category/{category_id}', [CategoryController::class, 'destroy']);

    Route::get('/post', [PostController::class, 'index']);
    Route::get('/add-post', [PostController::class, 'create']);
    Route::post('/add-post', [PostController::class, 'store']);
    Route::get('/edit-post/{post_id}', [PostController::class, 'edit']);
    Route::put('/edit-post/{post_id}', [PostController::class, 'update']);
    Route::get('/delete-post/{post_id}', [PostController::class, 'destroy']);

    Route::get('/user', [UserController::class, 'index']);
    Route::get('/edit-user/{user_id}', [UserController::class, 'edit']);
    Route::put('/edit-user/{user_id}', [UserController::class, 'update']);
    Route::get('/delete-user/{user_id}', [UserController::class, 'destroy']);
});
