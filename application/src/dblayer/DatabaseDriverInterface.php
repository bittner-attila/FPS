<?php

namespace FPS\DatabaseDrivers;

interface DatabaseDriverInterface {

  public function query($queryString, array $parameters): array;

}