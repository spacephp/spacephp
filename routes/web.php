<?php
use Illuminate\Route;

Route::get('/', function () {
    return _view('welcome');
});