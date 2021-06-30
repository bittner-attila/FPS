<?php

namespace FPS\Managers;

use FPS\Models\UserModel;

use FPS\DatabaseDrivers\PdoDatabaseDriver;
use FPS\DatabaseDrivers\MysqliDatabaseDriver;

class BaseManager
{
    public static $database;

    public static $databaseDrivers = [
        'pdo', 'mysqli',
    ];

    public function __construct(string $driverName = 'mysqli')
    {
        if (is_null(static::$database)) {
            static::setDatabaseDriver($driverName);
        }        
    }

    public static function setDatabaseDriver(string $driverName)
    {
        if (in_array($driverName, self::$databaseDrivers)) {

            if ($driverName === 'pdo') {
                static::$database = new PdoDatabaseDriver();

            } elseif ($driverName === 'mysqli') {
                static::$database = new MysqliDatabaseDriver();
            }

            return true;
        }

        return false;            
    }
}