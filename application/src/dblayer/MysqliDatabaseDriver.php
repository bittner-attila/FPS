<?php

namespace FPS\DatabaseDrivers;

class MysqliDatabaseDriver implements DatabaseDriverInterface
{
    public function query($queryString, array $parameters): array
    {
        return [['id' => 1, 'username' => 'msqli-test']];
    }
}