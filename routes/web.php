<?php
use Illuminate\Route;
use App\Controllers\HomeController;

Route::get('/', function () {
    return _view('welcome');
});