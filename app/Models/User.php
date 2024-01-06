<?php
namespace App\Models;

use Illuminate\Database\MongoDB\Model;

class User extends Model {
    public static $database = 'test';
    public static $collection = 'users';
    protected static $encrypt = ['email'];

    protected $email;

    public function map($data) {
        $this->email = $data['email'];
    }
}