<?php

use FPS\Managers\UserManager;
use FPS\Controllers\UserController;

require_once "../vendor/autoload.php";

$controller = new UserController();

echo '<pre>';
var_dump($controller->listUsers());
echo '</pre>';

UserManager::setDatabaseDriver('pdo');

echo '<pre>';
var_dump($controller->listUsers());
echo '</pre>';

?>