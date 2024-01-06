<?php
namespace App\Controllers;

class HomeController {
    public function index() {
        return _view('welcome');
    }
}