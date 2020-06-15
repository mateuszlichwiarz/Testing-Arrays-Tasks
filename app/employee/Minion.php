<?php

namespace App\employee;

use App\employee\Employee;

class Minion extends Employee
{
    public function fire()
    {
        print "{$this->name}: Spakuje manatki\n";
    }
}