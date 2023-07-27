<?php
namespace App\Models;

use Illuminate\MySQL\Model;

class User extends Model {
    public static $table = 'users';

    public static function current() {
        $uuid = isset($_COOKIE['_xp']) ? $_COOKIE['_xp'] : User::generateUUID();
        $user = User::findOrCreate([
            'uuid' => $uuid
        ], [
            'email' => $uuid . '@gmail.com',
            'name' => $uuid
        ]);
        return $user;
    }

    public static function generateUUID() {
        $uuid = md5(get_user_ip() . get_user_agent() . microtime());
        setcookie('_xp', $uuid, time() + 365 * 24 * 60 * 60, '/');
        return $uuid;
    }
}