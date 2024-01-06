<?php
use Illuminate\Route;
use App\Controllers\Api\UserController;

Route::group(['namespace' => '/api'], function() {
    Route::get('/users', [UserController::class, 'index']);
});