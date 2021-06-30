<?php 

namespace FPS\DatabaseDrivers;

class PdoDatabaseDriver implements DatabaseDriverInterface
{
    public function query($queryString, array $parameters): array
    {
        return [['id' => 2, 'username' => 'pdo-test']];
    }
}