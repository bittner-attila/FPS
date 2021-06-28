<?php

namespace FPS\Managers;

use FPS\Models\UserModel;

use FPS\DatabaseDrivers\MysqliDatabaseDriver;

class UserManager extends BaseManager
{
    public static function listUsers()
    {
        return array_map([new self(), 'hydrateUserRecord'], self::$database->query('SELECT * FROM users', []));
    }

    private function hydrateUserRecord(array $record): UserModel
    {
        $user = new UserModel();
        $user->id = $record['id'];
        $user->username = $record['username'];

        return $user;
    }

}