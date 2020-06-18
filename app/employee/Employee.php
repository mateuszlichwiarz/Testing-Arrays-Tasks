<?php

namespace App\employee;

use App\employee\NastyBoss;
use App\employee\Minion;
use App\employee\CluedUp;
use App\employee\WellConnected;

abstract class Employee
{
    protected $name;
    private static $types = ['Minion', 'CluedUp', 'WellConnected'];

    public static function recruit($name)
    {
        $num = rand(1, count(self::$types)) - 1;
        $class = __NAMESPACE__ . '\\'.self::$types[$num];

        return new $class($name);
    }

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract public function fire();
}