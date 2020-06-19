<?php

namespace App\employee;

use App\employee\Employee;

class Minion extends Employee
{
    public function fire()
    {
        print "{$this->name}: I will pack the bags\n";
    }
}
