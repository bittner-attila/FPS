<?php

namespace FPS\Controllers;

use FPS\Managers\UserManager;

class UserController 
{
	public static $manager;

	public function __construct()
    {
        self::$manager = new UserManager();
    }

    public function listUsers()
    {
        return self::$manager::listUsers();
    }
}