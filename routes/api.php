<?php
use Illuminate\Route;

Route::get('/welcome', function() {
    return ['message' => 'Welcome'];
});