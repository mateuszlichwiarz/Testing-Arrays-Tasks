<?php

namespace App\employee;

use App\employee\Employee;

class WellConnected extends Employee
{
    public function fire()
    {
        print "{$this->name}: I will callaa to my dad!\n";
    }
}