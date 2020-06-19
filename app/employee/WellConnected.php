<?php

namespace App\employee;

use App\employee\Employee;

class WellConnected extends Employee
{
    public function fire()
    {
        print "{$this->name}: I will call to my dad!\n";
    }
}