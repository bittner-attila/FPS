<?php

namespace FPS\DatabaseDrivers;

class MysqliDatabaseDriver
{
    public function query($queryString, array $parameters): array
    {
        return [['id' => 1, 'username' => 'msqli-test']];
    }
}