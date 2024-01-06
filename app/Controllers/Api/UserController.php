<?php
namespace App\Controllers\Api;

use App\Models\User;

class UserController {
    public function index() {
        return User::all();
    }
}